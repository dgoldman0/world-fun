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
    <script src="/js/puzzle.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/puzzle.css">
    <title>World Builder: Puzzle Game</title>
	<meta property="og:title" content="World Builder Project" />
	<meta property="og:description" content="World Builder seeks to improve the world through blockchain and cryptoasset technology. We are currently in the initial stages of releasing and promoting our TRC-10 token." />
	<meta property="og:url" content="https://worldbuilder.fun" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:site" content="World Builder" />
	<meta property="og:image" content="https://worldbuilder.fun/img/usa-lights.jpg"/>
	<meta name="twitter:title" content="World Builder: Puzzle Game" />
	<meta name="twitter:description" content="Improving freedom and economic prosperity through blockchain technology." />
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
        
        <div class="float-left">Prize Pool (TRX):</div>
        <div class="float-right"><span id="prize-pool"></span></div>
        <div class="clearfix"></div>
		<br/>
		<center><button type = "button" class = "btn btn-primary" id = "register">Register (<span id = "buy-in"></span>TRX Fee)</button></center>
      </div>
      <div id = "ad" class = "col-md-5">
      	<div class = "row">
      		<div>
      			<button type = "button" class = "btn btn-primary btn-sq"></button>
      		</div>
      	</div>
      	<hr/>
      	<span id = "referral-link"></span>
      </div>
      <div id = "control_bar" class = "col-md-3">
    </div>
	</body>
</html>