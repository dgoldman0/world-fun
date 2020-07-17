// Some stuff borrowed from or inspired by TronBuild source
var contractAddress = 'TGAoM3wdm4gUqMYLPUHrAczUxDf6GPVDe3';
// old contract: TRYcXPKBQNrNfTW7eZT51oBQJjasNJWvru
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
function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}
function getPermutation(n, k) {
	if (k >= n) return null;
	var sequence = [];
	while (sequence.length < k) {
		var num = getRandomInt(n)
		if (!sequence.includes(num)) sequence.push(num);
	}
	return sequence;
}
$('#drip').hide();
$(document).ready(function() {
	$("#drip").click(function() {
		if (checkConnection()) {
			// Check if registered
			var contract = window.tronWeb.contract(abi_waterfall, contractAddress);
			contract.drip().send({shouldPollResponse: false});
		}
	});
	$('#register-trx').click(function() {
		if (checkConnection()) {
			// Check if registered
			var contract = window.tronWeb.contract(abi_waterfall, contractAddress);
			contract.register(referrer).send({shouldPollResponse: false, callValue: 1000000000});
		}
	});
	$('#register-wrld').click(function() {
		if (checkConnection()) {
			// Check if registered
			var contract = window.tronWeb.contract(abi_waterfall, contractAddress);
			contract.register(referrer).send({shouldPollResponse: false, tokenValue: 100000000000, tokenId: TID});
		}
	});
	$("#boost").click(function() {
	  if (checkConnection()) {
	    var contract = window.tronWeb.contract(abi_waterfall, contractAddress);
		    var amt = Number($("#boost-amount").val());
	    if (amt > 0 && Number.isInteger(amt)) {
		    contract.boost().send({shouldPollResponse: false, callValue: (amt * 1000000).toFixed(0)});
		} else {
			alert("Boost amount must be greater than zero.");
		}
	   	$("#boost-amount").val(0);
	  }
	});
	
	$("#deposit").click(function () {
		if (checkConnection()) {
			var contract = window.tronWeb.contract(abi_waterfall, contractAddress);
		    var amt = Number($("#deposit-amount").val());
		    if (amt > 0 && Number.isInteger(amt)) {
				contract.deposit().send({shouldPollResponse: false, tokenValue: (amt * 1000000).toFixed(0), tokenId: TID});
		    } else {
		    	alert("Deposit amount must be a whole number greater than 0");
		    }
			$("#deposit-amount").val(0);
		}	
	});
	$("#get-prize").click(function () {
		if (checkConnection()) {
			var contract = window.tronWeb.contract(abi_waterfall, contractAddress);
			contract.getPrize().send({shouldPollResponse: false});
		}	
	});
	$("#withdraw").click(function() {
	  if (checkConnection()) {
	    var contract = window.tronWeb.contract(abi_waterfall, contractAddress);
	    contract.withdrawTokens().send({shouldPollResponse: false});
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
	  privateKey: burnerKey,
	});
	
	var contractGlobal = tronWebGlobal.contract(abi_waterfall, contractAddress);
	// Set timer for continuous operation
	
	// I should make the timer halt and wait until all checks are done, but we'll see.
	var run = function() {
		// Check global information that's player independent
		contractGlobal.secondsSinceLastDrip().call().then(function (res) {
			$('#time-since').text(res);
		});
		contractGlobal.totalPlayers().call().then(function (res) {
			$('#player-count').text(res);
		});
		contractGlobal.secondsSinceLastDrip().call().then(function (res) {
			$('#time-since').text(res);
			contractGlobal.dripsSinceLastPrize().call().then(function (res2) {
				$('#drops-since').text(res2);
				/*
				var prizeAvail = (res2 > 1000 - 2 * (res)) && res <= 500;
				$("#get-prize").attr("disabled", !prizeAvail);
				*/
			});
		});
		contractGlobal.boostTotal().call().then(function (res) {
			$('#total-boost').text(res / 1000000);
		});
		contractGlobal.getAvailableBalance().call().then(function (res) {
			$('#available-balance').text(res / 1000000);
		});
		contractGlobal.prizeFund().call().then(function (res) {
			$('#prize-fund').text(res / 1000000);
		});
		// Check player information
		if (checkConnection()) {
			var contract = window.tronWeb.contract(abi_waterfall, contractAddress);
			// Get the global referrer if there isn't a local one
			if (!hasRef) {
				var global = window.tronWeb.contract(abi_global, 'TJZtPeHqCv862LBrgeLHqbMwmvfy1r3aJ7');
				global.referrer(window.tronWeb.defaultAddress.base58).call().then(function (res) {
					var ref = window.tronWeb.address.fromHex(res);
					if (ref != "T9yD14Nj9j7xAB4dbGeiX9h8unkKHxuWwb") referrer = ref;
				});
			}
			contract.isRegistered().call().then(function (res) {
				if (res) {
					$('#register').hide();
					$('#drip').show();
				} else {
					$('#register').show();
					$('#drip').hide();
				}
			});
			contract.secondsToNextDrip().call().then(function (res) {
				if (Number(res) != NaN) {
					$("#time-to-drip").text(res);
//					$("#drip").attr("disabled", (res != 0));
				}
			});
			contract.myReferralCount().call().then(function (res) {
				if (Number(res) != NaN) {
					$("#number-referred").text(res);
				}
			});
			contract.myReferralBonuses().call().then(function (res) {
				if (Number(res) != NaN) {
					$("#referral-bonus").text(res / 1000000);
				}
			});
			contract.getMyBalance().call().then(function (res) {
				if (Number(res) != NaN) {
					$('#your-balance').text(res / 1000000);
				}
			});
			contract.isRegistered().call().then(function (res) {
				if (res) {
					$("#referral-link").html("Refer people and earn even more WRLD! Here is <a href = \"http://worldbuilder.fun/waterfall.php?ref=" + window.tronWeb.defaultAddress.base58 + "\">your referral link</a>.");
				}
			});
			contract.getBoost().call().then(function (res) {
				if (Number(res) != NaN) {
					$('#interest-rate').text((Number(res) + 10) + "%");
				}
			});
		}
	};
	run();
	setInterval(run, 3000);
});