$(document).ready(function() {
	  if (checkConnection()) {
	    var contract = window.tronWeb.contract(abi_burner, contractAddress);
	  });


function getTransactions() {
	tronWeb.trx.getTransactionsToAddress("TNDFkUNA2TukukC1Moeqj61pAS53NFchGF", 30, 0);
}

tronWeb.trx.getTransactionsFromAddress("TNDFkUNA2TukukC1Moeqj61pAS53NFchGF", 30, 0);
