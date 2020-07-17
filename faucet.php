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
  	<title>World Builder Faucet Game</title>
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
    <script src="/js/faucet.js"></script>
  </head>
  <body>
    <?php require_once('inc/menu_bar.php'); ?>
    <div id = "main" class = "row">
      <div id = "status_bar" class = "col-md-3 rounded border">
        <h1><center>Status</center></h1>
        <hr/>
        <div class="float-left">Connection Status: </div>
        <div class="float-right"><span id="connection-status">Not connected to Tron</span></div>
        <div class="clearfix"></div>

        <div class="float-left">Total Players</div>
        <div class="float-right"><span id="player-count"></span></div>
        <div class="clearfix"></div>     

        <div class="float-left">Seconds Since Last Drop:</div>
        <div class="float-right"><span id="time-since"></span></div>
        <div class="clearfix"></div>

        <div class="float-left">Your Balance (WRLD):</div>
        <div class="float-right"><span id="your-balance"></span></div>
        <div class="clearfix"></div>
        
        <div class="float-left">Max Interest Rate (APR): </div>
        <div class="float-right"><span id="interest-rate"></span></div>
        <div class="clearfix"></div>
		<hr/>
        <div class="float-left">You Referred:</div>
        <div class="float-right"><span id="number-referred"></span> people</div>
        <div class="clearfix"></div>

        <div class="float-left">Total Referral Bonus:</div>
        <div class="float-right"><span id="referral-bonus"></span> WRLD</div>
        <div class="clearfix"></div>
		<hr/>        
        <div class="float-left">Total TRX Boosted:</div>
        <div class="float-right"><span id="total-boost"></span></div>
        <div class="clearfix"></div>

        <div class="float-left">Available Contract Balance (WRLD):</div>
        <div class="float-right"><span id="available-balance"></span></div>
        <div class="clearfix"></div>
       
        <div class="float-left">Drops Since Last Prize:</div>
        <div class="float-right"><span id="drops-since"></span></div>
        <div class="clearfix"></div>

        <div class="float-left">Prize Fund (WRLD):</div>
        <div class="float-right"><span id="prize-fund"></span></div>
        <div class="clearfix"></div>
        <hr/>	
        <center><button type = "button" class = "btn btn-primary" id = "get-prize" disabled = "true">Attempt Claim Prize</button></center>       
      </div>
      <div id = "ad" class = "col-md-5 rounded border">
      	<h1><center>Info</center></h1>
      	<hr/>
      	<p>WorldCoin (WRLD) is the economic foundation for World Builder, a blockchain and crypto think tank and incubator, focusing on increasing the number of users for these technologies, both in entertainment and for promoting quality of life. Aside from buying WRLD from Tronscan for 0.01 TRX each, you can also get WRLD from this faucet, absolutely free. To register for the faucet, just click "take a drop" to take your first drop. You can take a drop once every five minutes.</p>
      	<p>Have a lot of WRLD and you're not sure what to do with it? You can use it in our <a href = "https://worldbuilder.fun/burner.php">burner game</a>. "Battle" against other users for a TRX prize pool.</p>
      	<?php require_once("inc/ads.php"); ?>
      	<hr/>
		<span id="referral-link"></span>
      </div>
      <div id = "control_bar" class = "col-md-3 rounded border">
          <h1><center>Options</center></h1>
          <hr/>
          <form>
          	<div class = "form-group">
          		<label for = "boost-amount">Boost Interest With TRX</label>
          		<input class = "form-control" type = "text" id = "boost-amount" aria-describedby = "boost-tip"></input>
          		<small id = "boost-tip">You will receive a percentage point boost by <em>permanently giving us</em> this amount of TRX.</small>
          	</div>
          	<button type = "button" class = "btn btn-primary" id = "boost">Boost Interest</button>
 	        <hr/>
          	<div class = "form-group">
          	  <lable for = "deposit-amount">Deposit WRLD</lable>
	          <input class = "form-control" type = "text" id = "deposit-amount" aria-describedby = "deposit-tip"></input>
			  <small id = "deposit-tip">Deposit WRLD from your wallet into your game balance. Interest is calculated on that full balance.</small>          
	        </div>
	        <button type = "button" class = "btn btn-primary" id = "deposit">Deposit WRLD</button>
	        <hr/>
	        <div class = "float-left"><button type = "button" class = "btn btn-warning" id = "withdraw">Withdraw All</button></div><div class = "float-right"><button type = "button" class = "btn btn-primary" id = "drip" disabled = "true">Take a Drop (<span id = "time-to-drip"></span>s)</button></div>
	        <div class = "clearfix"></div>
	      </form>
      </div>
    </div>
    <hr/>
    <div id = "disclaimer">
    	<p class = "lead">This faucet is an economic game. To learn more, check out <a href = "/faucet_details.php">the faucet details page</a>. Like other dapps, this game costs energy to play (~37K energy for taking a drop). There are no refunds. Unclaimed WRLD that are left in the account when the available balance goes to zero cannot be claimed. No warranty is provided. To view the contract source code, please go to <a href = "https://tronscan.org/#/contract/TMPxbVA2Lb6tMBQfffMPSoNtSJLKnhFhwE/code">Tronscan</a></p>
    </div>
  </body>
</html>