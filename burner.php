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
		<title>World Builder Burner Game</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="css/style.css">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({
		          google_ad_client: "ca-pub-8710469397882137",
		          enable_page_level_ads: true
		     });
		</script>
	    <script src="/js/tronweb.js"></script>
	    <script src="/js/abi.js"></script>
	    <script src="/js/burner.js"></script>
	</head>
	<body>
    <?php require_once('inc/menu_bar.php'); ?>
    <div id = "main" class = "row">
      <div id = "status_bar" class = "col-md-3">
        <h1><center>Status</center></h1>
        <div class="float-left">Connection Status: </div>
        <div class="float-right"><span id="connection-status">Not connected to Tron</span></div>
        <div class="clearfix"></div>

        <div class="float-left">Current Round:</div>
        <div class="float-right"><span id="round"></span></div>
        <div class="clearfix"></div>

        <div class="float-left">Total Players This Round:</div>
        <div class="float-right"><span id="player-count"></span></div>
        <div class="clearfix"></div>
        
        <div class="float-left">Total All Time Burned (WRLD):</div>
        <div class="float-right"><span id="total-burned"></span></div>
        <div class="clearfix"></div>           

        <div class="float-left">Prize Pool (TRX):</div>
        <div class="float-right"><span id="prize-pool"></span></div>
        <div class="clearfix"></div>
		<hr/>
        <div class="float-left">Your Burn This Round (WRLD):</div>
        <div class="float-right"><span id="your-burn"></span></div>
        <div class="clearfix"></div>
        <div class="float-left">Current Winner Has Burned (WRLD):</div>
        <div class="float-right"><span id="highest-burn"></span></div>
        <div class="clearfix"></div>
		<hr/>
        <div class="float-left">You Referred:</div>
        <div class="float-right"><span id="referral-count"></span> people</div>
        <div class="clearfix"></div>

        <div class="float-left">Your Total Referral Bonus:</div>
        <div class="float-right"><span id="referral-bonus"></span> TRX</div>
        <div class="clearfix"></div>
		<hr/>
		<center>The current winner is <span id = "current-winner"></span> w/<br/><span id = "days-remaining"></span> D | <span id = "hours-remaining"></span> H | <span id = "minutes-remaining"></span> M | <span id = "seconds-remaining"></span>S remaining.</center>
		<br/>
		<center><button type = "button" class = "btn btn-primary" id = "register">Register (<span id = "buy-in"></span>TRX Fee)</button></center>
      </div>
      <div id = "ad" class = "col-md-5">
      	<h1><center>Info</center></h1>
      	<p>Burner is an economic auction game. You "battle" with other users by burning WRLD. The person who burns the most WRLD at the end of the game wins the prize pool. You can get WRLD from the <a href = "https://worldbuilder.fun/faucet.php">faucet</a>, or you can buy it through <a href="https://tronwatch.market/trade/1002567-TRX">Tronwatch's DEX</a>.</p>
      	<?php require_once("inc/ads.php"); ?>
      	<hr/>
      	<span id = "referral-link"></span>
      </div>
      <div id = "control_bar" class = "col-md-3">
          <h1><center>Options</center></h1>
          <form>
          	<div class = "form-group">
          	  <lable for = "burn-amount">Permanently Burn World</lable>
	          <input class = "form-control" type = "text" id = "burn-amount" aria-describedby = "burn-tip"></input>
			  <small id = "burn-tip">This amount of WLRD will be permanently locked in the contract. To win the pool, make sure you have burned more than anyone else.</small>          
			</div>
	          <button type = "button" class = "btn btn-primary" id = "burn">Burn WLRD</button>
	      </form>
	      <hr/>
	      	To register: Click the register button. You will <b>pay the game</b> the current buy-in. 5% will go to the devs. 5% will go to your referrer, or to the current highest burner, if the referral address is empty.
	      	<br/><br/>
	      	To play: The game will start once 10 people register. The game is simple: burn WLRD. You lose that WRLD, and it is temporarily locked out of circulation. After the timer runs out, the game will end when the next person burns WRLD. The person who has burned the most WRLD wins the pot (50% of the contract's TRX balance)!
	      	<br/><br/>
	      	After the end of a round, a new round will start. You will have to register again, and the buy-in will increase with each new round.
      </div>
    </div>
      <hr/>
	    <div class = "disclaimer">
	    	<p class = "lead">This burner is an economic game. To learn more, check out <a href = "/burner_details.php">the game details page</a>. There are no refunds. 5% of the registration fee goes to the devs, and if you were referred by someone then 5% goes to that referrer. 50% of the contract balance is given for the prize at the end of each round.
	    </div>
	</body>
</html>