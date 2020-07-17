var transactions = [];
var lastTransaction;

function updateTransactions() {
	
}
function getTransactions() {
	tronWeb.trx.getTransactionsToAddress("TNDFkUNA2TukukC1Moeqj61pAS53NFchGF", 30, 0);
}

tronWeb.trx.getTransactionsFromAddress("TNDFkUNA2TukukC1Moeqj61pAS53NFchGF", 30, 0);
