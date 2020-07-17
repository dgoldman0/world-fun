var contractAddress = '';
const TID = 1002567;
var referrer = 'TTYTYPVEzjBKBgizGRwYjQ988e2sc8WPha'; // Default to mine, because why not? Might just change this to a blank address.

// Set referrer address if there is one
var params = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
	params[key] = value;
});

if (params['ref'] != undefined) referrer = params['ref'];

$(document).ready(function() {
	$("#create").click(function () {
		var size = $("#create").val();
		if (size > 0) {
			if (Math.sqrt(size) % 1 === 0) {
				if (size > 100) {
					alert("This is the alpha testing stage. Don't risk that much TRX!");
				} else {
					if (checkConnection()) {
					    var contract = window.tronWeb.contract(abi_burner, contractAddress);
					}
				}
			} else {
				alert("The size must be a perfect square.");
			}
		} else {
			alert("You must spent at least 1 TRX.");
		}
		$("#building-size").val(0);
	});

	$("#building-size").on('input keypress change paste', est_divs);
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
	
	$("#collect-dividends").click(function () {
		if (checkConnection()) {
			// Confirm that the user understands that all dividends will be pulled and every building owned will increase in wear by one, up to the maximum wear.
		}
	});
	// Use burner address to allow Tronweb to view basic information even when not logged in
	const burnerKey = 'c4e8f5a69efb674ba5ed4f0c53cfef0f90ff6134aba7417bfffcf3c7a2b13524'; // This is a burner account - it should not ever be used! 
	var tronWebGlobal = new TronWeb({
		fullHost: 'https://api.trongrid.io',
    	privateKey: burnerKey
	});
	
	var contractGlobal = tronWebGlobal.contract(abi_burner, contractAddress);

	// Set timer for continuous operation
	var run = function() {
		// Check global information that's player independent
		contractGlobal.totalPlayers().call().then(function (res) {
			$('#total-registered').text(res);
		});
		// Check player information
		if (checkConnection()) {
			var contract = window.tronWeb.contract(abi_burner, contractAddress);
			contract.calculateDividends().call().then(function (res) {
				$("#current-dividends").text(res);
			});
		}
	};
	// There isn't as much to update with this game, so every ten seconds is fine, especially because checking interest is resource intensive.
	setInterval(run, 10000);
});