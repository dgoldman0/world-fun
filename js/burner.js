var contractAddress = 'TFxSUhWja3cfjGMgmoQL2K8BD8Mb2g5Qy2';
// var contractAddress = 'TXdzSsW5YMjs2S1VD9PRWFN3V79tKFvLL8';
// var contractAddress = 'TDrCRUoXCKC4mJ1iG76nhopFzYenT9zRvC';
const TID = 1002567;
var referrer = 'TTYTYPVEzjBKBgizGRwYjQ988e2sc8WPha'; // Default to mine, because why not?
var hasRef = false;

// Set referrer address if there is one
var params = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
	params[key] = value;
});

if (params['ref'] != undefined) {
	referrer = params['ref'];
	hasRef = true;
}

$(document).ready(function() {
	$("#register").click(function() {
	  if (checkConnection()) {
	    var contract = window.tronWeb.contract(abi_burner, contractAddress);
	    contract.buyIn().call().then(function (res) {
		    contract.register(referrer).send({shouldPollResponse: false, callValue: (res * 1000000).toFixed(0)});
	    });
	  }
	});
	$("#burn").click(function() {
		if (checkConnection()) {
		    var contract = window.tronWeb.contract(abi_burner, contractAddress);
		    var amt = Number($("#burn-amount").val());
		    if (amt > 0) {
		    	amt = (amt * 1000000).toFixed(0);
			    contract.burn().send({tokenValue: amt, tokenId: TID}).then(function(res) {
			    	
			    })
			    .catch(function(err) {
					console.log("ERROR: " + err);
				});
			} else {
				alert("Burn amount must be greater than zero.");
			}
		   	$("#burn-amount").val(0);
		}
	});

	function checkConnection() {
	  if (!window.tronWeb) {
	    $('#connection-status').html('Not Connected to Tron');
	    return false;
	  }
	  if (!window.tronWeb.defaultAddress.base58) {
	    $('#connection-status').html('Not Connected to Tron');
	    return false;
	  }
	  $('#connection-status').html('Connected to Tron');
	  return true;
	}
	
	// Use burner address to allow Tronweb to view basic information even when not logged in
	const burnerKey = 'c4e8f5a69efb674ba5ed4f0c53cfef0f90ff6134aba7417bfffcf3c7a2b13524'; // This is a burner account - it should not ever be used! 
	var tronWebGlobal = new TronWeb({
		fullHost: 'https://api.trongrid.io',
    	privateKey: burnerKey
	});
	
	var contractGlobal = tronWebGlobal.contract(abi_burner, contractAddress);
	// Set timer for continuous operation
	
	// I should make the timer halt and wait until all checks are done, but we'll see.
	var run = function() {
		// Check global information that's player independent
		contractGlobal.round().call().then(function (res) {
			$('#round').text(res);
		});
		contractGlobal.totalPlayers().call().then(function (res) {
			$('#player-count').text(res);
		});
		contractGlobal.totalBurned().call().then(function (res) {
				$('#total-burned').text(res / 1000000);
		});
		contractGlobal.highestBurn().call().then(function (res) {
			if (Number(res) != NaN)
				$('#highest-burn').text(res / 1000000);
		});
		contractGlobal.timeRemaining().call().then(function (res) {
			if (Number(res) == NaN) res = 0;
			var time = res / 86400;
			var days = Math.floor(time);
			$("#days-remaining").text(days);
			time = 24*time - 24 * days;
			var hours = Math.floor(time);
			$("#hours-remaining").text(hours);
			time = 60*time - 60 * hours;
			var minutes = Math.floor(time);
			$("#minutes-remaining").text(minutes);
			time = 60*time - 60 * minutes;
			$("#seconds-remaining").text(Math.floor(time));
			
		});
		contractGlobal.prizePoolAmount().call().then(function (res) {
			if (Number(res) != NaN)
				$('#prize-pool').text(res / 1000000);
		});
		contractGlobal.currentWinner().call().then(function (res) {
			if (res == "")
				$("#current-winner").text("T*********************************");
			else {
				$("#current-winner").text(window.tronWeb.address.fromHex(res));
				var isCurrentWinner = res == window.tronWeb.defaultAddress.base58;
				// Change some state stuff to indicate that this player is the current winner.
			}
		});
		// Check player information
		if (checkConnection()) {
			// Get the global referrer if there isn't a local one
			if (!hasRef) {
				var global = window.tronWeb.contract(abi_global, 'TJZtPeHqCv862LBrgeLHqbMwmvfy1r3aJ7');
				global.referrer(window.tronWeb.defaultAddress.base58).call().then(function (res) {
					var ref = window.tronWeb.address.fromHex(res);
					if (ref != "T9yD14Nj9j7xAB4dbGeiX9h8unkKHxuWwb") referrer = ref;
				});
			}
			var contract = window.tronWeb.contract(abi_burner, contractAddress);
			contract.checkRegistered().call().then(function (res) {
				if (res) {
					$("#register").hide();
					$("#burn").prop("disabled", false);
					contract.myBurnedAmount().call().then(function (res2) {
						if (Number(res2) != NaN)
							$("#your-burn").text(res2 / 1000000);
					});
					contract.myReferralCount().call().then(function (res2) {
						$('#referral-count').text(res2);
					});
					contract.myReferralBonus().call().then(function (res2) {
						if (Number(res2) != NaN)
							$('#referral-bonus').text(res2 / 1000000);
					});
					$("#referral-link").html("Refer people and earn 5% of the TRX buy-in for every person that registers using <a href = \"http://worldbuilder.fun/burner.php?ref=" + window.tronWeb.defaultAddress.base58 + "\">your referral link</a>.");
				} else {
					$("#register").show();
					$("#burn").prop("disabled", true);
					contract.buyIn().call().then(function (res2) {
						$("#buy-in").text(res2);
					});
					contract.gameStartedAt().call(function (res2) {
						contract.buyIn().call(function (res2) {
						});
					});
				}
			});
		}
	};
	run();
	setInterval(run, 3000);
});