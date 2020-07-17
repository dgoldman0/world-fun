<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114409253-4"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-114409253-4');
		</script>
		<title>Faucet Game Details</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	    <?php require_once('inc/menu_bar.php'); ?>
		<div id="main">
			<div class = "row">
				<div class = "col-md-3">
					<h1><center>Quick Start Guide</center></h1>
					<ul>
						<li>Register by taking your <b>first drop (click drop button)</b>.</li>
						<li>Add more WRLD to stake if you want.</li>
						<li>Donate TRX to boost interest rate.</li>
						<li>Withdraw funds when you want.</li>
						<li>Claim prize if available.</li>
						<li>Please read the rest of this document though. There are risks etc. Thanks!</li>
					</ul>
				</div>
				<div class = "col-md-9">
					Rather than simply distributing tokens out at random, or doing any kind of token sale, we figured it would be best to distribute tokens through a series of games that will hopefully get people interested in this project. The first such game is a token faucet with a few interesting mechanics. The source code for the faucet contract can be viewed through <a href = "https://tronscan.org/#/contract/TG6u8VjjxGJZx9gXUVGxrRS9BymHewGzM1/code">Tronscan</a>. However, here are the details of how the faucet works. Keep in mind that there is no warranty issued for this game. When the contract runs out of WRLD, you will not be able to withdraw tokens. You will not get a refund. Everything should work as indicated, but in some ways this project is a public alpha/beta.
					<h1>Faucet</h1>
					A person may take a drop once every five minutes. The size of the drop is at least two WRLD. The actual size of the drop is the maximum of that amount and how many seconds it's been since the last drop. That means that on slower days, people will receive larger drops. When you take your first drop, you'll automatically be registered. If you have a ref address in the URL that address will be listed as your referrer. Otherwise a default referrer that we set will be used. If you want to refer other people and get a bonus, just add ?ref=[your tron address] to the URL. For instance, if your wallet address is TTYTYPVEzjBKBgizGRwYjQ988e2sc8WPha, then it would be http://worldbuilder.fun/faucet.php?ref=TTYTYPVEzjBKBgizGRwYjQ988e2sc8WPha.
					<h1>Staking and Interest</h1>
					WRLD is not automatically transferred to the user's wallet. Instead it is automatically staked and receives interest. The base interest rate is 5% APR. Interest is calculated when a person takes a drop. However, because of potential rounding errors, small balances may not receive the full interest. Meanwhile, since interest is calculated when a person takes a drop, interest is compounded with each drop. More frequent users will therefore see greater compounding, if they balance compounding and rounding errors. WRLD can be withdrawn at any time, so long as there is enough WRLD left in the contract.
					<h1>Boosting</h1>
					Since we did want to generate some TRX from this initial phase, we included the option of sending the project wallet TRX in return for an interest rate boost. The boost rate can be up to 100 percentage points. The actual boost rate approaches 100% as the amount of TRX that a player spends to boost approaches the total amount of TRX spent. To calculate the interest rate boost, take 100 percentage points and subtract the number of times greater the total boost is than the amount you boosted. So for instance, if the total boost is 1,000 TRX and you boosted with 50 TRX, the boost amount would be 100 - 1,000/50 or 80 percentage points.
					<h1>Prize</h1>
					The rule for getting the prize is fairly complicated. When a drop occurs, WRLD is also added to a prize pool. The prize becomes available when there have been 1,000 drops from the last prize won. But that amount decreases by twice the number of seconds since the last drop. However, the prize becomes unavailable again if the seconds since last drop is greater than 500! Once the prize is available, it can be grabbed by the first person who notices it. Be aware that Tron doesn't always update immediately, so there can be a couple second lag. This lag should be taken into account when developing a strategy to get the prize. You might click to attempt to get the prize and not receive it because it's too late. 
					<hr/>
					There's also a premium version of the faucet, called "waterfall." This version requires an initial payment of 1,000 TRX or 100,000 WRLD. However, the waterfall spits out WRLD ten times faster than the faucet, has a max interest rate of 200% APR, with less of an issue with roundoff, and a 100% bonus for referral, rather than the 50% bonus that the basic faucet provides. We suggest starting with the basic faucet, and building up enough WRLD to access the waterfall.
					<hr/> 
					<p>Using a bot to automate the faucet or waterfal is a violation of the Terms of Service. Do not ruin this project for everyone. Terms subject to change.</p>
				</div>
			</div>
		</div>
	</body>
</html>