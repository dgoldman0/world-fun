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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/tronweb.js"></script>
    <script src="/js/abi.js"></script>
    <script src="/js/index.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>World Builder (Home)</title>
	<meta property="og:title" content="World Builder Project" />
	<meta property="og:description" content="World Builder seeks to improve the world through blockchain and cryptoasset technology. We are currently in the initial stages of releasing and promoting our TRC-10 token." />
	<meta property="og:url" content="https://worldbuilder.fun" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:site" content="World Builder" />
	<meta property="og:image" content="https://worldbuilder.fun/img/logo.png"/>
	<meta name="twitter:title" content="World Builder Project" />
	<meta name="twitter:description" content="Improving freedom and economic prosperity through blockchain technology." />
	<meta name="twitter:image" content="https://worldbuilder.fun/img/logo.png" />
	<style>
		.info {
			background-color: WhiteSmoke; 
			margin: 20x;
		}
		img {
			width: 100%;
		}
	</style>
  </head>
  <body>
    <?php require_once('inc/menu_bar.php'); ?>
    <div id = "main">
      <div class = "row">
      	<div class = "col-md-11 rounded border" style = "margin:4px;">
	       Connection Status: <span id="connection-status">Not connected to Tron</span>
		</div>
      </div>
        <div class = "row">
      	<div class = "col-md-6 rounded border" style = "margin: 2px">
	        <h1><center>Status</center></h1>
	        <hr/>
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
	        <br/>
      	</div>
      	<div class = "col-md-5 rounded border" style = "margin: 2px">
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
      <div class = "row">
      </div>
	</div>
  </body>
</html>
