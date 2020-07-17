const contractAddress = 'TJZtPeHqCv862LBrgeLHqbMwmvfy1r3aJ7';
const TID = 1002567;
var referrer = 'TTYTYPVEzjBKBgizGRwYjQ988e2sc8WPha'; // Default to mine, because why not?

// Set referrer address if there is one
var params = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
	params[key] = value;
});

if (params['ref'] != undefined) referrer = params['ref'];

$(document).ready(function() {
	// Use burner address to allow Tronweb to view basic information even when not logged in
	const burnerKey = 'c4e8f5a69efb674ba5ed4f0c53cfef0f90ff6134aba7417bfffcf3c7a2b13524'; // This is a burner account - it should not ever be used! 
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
	var tronWebGlobal = new TronWeb({
	  fullHost: 'https://api.trongrid.io',
	  privateKey: burnerKey,
	});
	
	$("#register").click(function () {
		if (checkConnection()) {
		    var contract = window.tronWeb.contract(abi_global, contractAddress);
		    contract.register(referrer).send({shouldPollResponse: false});
		}		
	});

	var contracts = {};
	// Blacklist address: TV3eDFQCddxNYG7tUJEyTRu1w2SkUkKGBr
	contracts.faucet = tronWebGlobal.contract(abi, 'TMPxbVA2Lb6tMBQfffMPSoNtSJLKnhFhwE');
	contracts.waterfall = tronWebGlobal.contract(abi_waterfall, 'TGAoM3wdm4gUqMYLPUHrAczUxDf6GPVDe3');
	contracts.burner = tronWebGlobal.contract(abi_burner, 'TFxSUhWja3cfjGMgmoQL2K8BD8Mb2g5Qy2');
	contracts.med = tronWebGlobal.contract(abi_med, 'TEsuZqjafyCrQHNtwrBVmrEMJjGC7cUrU7');
	contracts.rapid  = tronWebGlobal.contract(abi_burner, 'TVYnGLnh1fMRVr1uMTUX8Ng23C1SZcfGpD');
	contracts.global = tronWebGlobal.contract(abi_global, contractAddress);
	var run = function() {
		contracts.faucet.totalPlayers().call().then(function (res) {
			$('#active-faucet').text(res);
		});		
		contracts.waterfall.totalPlayers().call().then(function (res) {
			$('#active-waterfall').text(res);
		});		
		contracts.burner.totalPlayers().call().then(function (res) {
			$('#active-burner').text(res);
		});
		contracts.med.totalPlayers().call().then(function (res) {
			$('#active-mid').text(res);
		});
		contracts.rapid.totalPlayers().call().then(function (res) {
			$('#active-rapid').text(res);
		});
		contracts.global.totalUsers().call().then(function (res) {
			$("#total-registered").text(res);
		});
		if (checkConnection()) {
		    var contract = window.tronWeb.contract(abi_global, contractAddress);
		    contract.isRegistered(window.tronWeb.defaultAddress.base58).call().then(function (res) {
		    	if (!res) {
		    		// Display registration box
		    		$("#register-box").show();
		    	} else {
		    		// Hide registration box
		    		$("#register-box").hide();
		    	}
		    });
		}
	};	
	run();
	setInterval(run, 5000);
});