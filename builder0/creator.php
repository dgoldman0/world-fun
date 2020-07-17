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
		<title>World Builder Game</title>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="/css/style.css">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({
		          google_ad_client: "ca-pub-8710469397882137",
		          enable_page_level_ads: true
		     });
		</script>
	    <script src="/js/tronweb.js"></script>
	    <script src="/js/abi.js"></script>
	    <script src="js/creator.js"></script>
	</head>
	<body>
    <?php require_once('../inc/menu_bar.php'); ?>
    <div id = "main" class = "row">
      <div id = "status_bar" class = "col-md-3">
        <h1><center>Status</center></h1>
        <div class="float-left">Connection Status: </div>
        <div class="float-right"><span id="connection-status">Not Connected to Tron</span></div>
        <div class="clearfix"></div>
        <div class="float-left">Total Registered: </div>
        <div class="float-right"><span id="total-registered"></span></div>
        <div class="clearfix"></div>
        <hr/>
        <div class="float-left">Current Dividends: </div>
        <div class="float-right"><span id="current-dividends"></span></div>
        <div class="clearfix"></div>
        <br/>
        <center><button type = "button" id = "collect-dividends">Collect Dividends</button></center>
      </div>
      <div id = "ads" class = "col-md-5">
      	<h1><center>Building Creator</center></h1>
      	<h2><center>Builder Game is in ALPHA</center></h2>
      	<?php require_once('../inc/ads.php'); ?>
      </div>
      <div id = "creator" class = "col-md-3">
        <h1><center>Creator</center></h1>
        <small>Select the size of the building, in TRX. The cap is 100 TRX for now [during the alpha testing stage], must be a whole number, and must be a perfect square. TRX are distributed as follows. 10% will go to referrer, if there is one, 50% will go to the burner game pool, and the rest will go towards funding additions to this project. If you are not registered, you will be automatically registered when you buy your first building.</small>
        <hr/>
        <form>
          	<div class = "form-group">
          		<label for = "building-size">Building Size</label>
	          		<input class = "form-control" type = "text" id = "building-size" aria-describedby = "size-tip"></input>
          		<small id = "size-tip">Please enter the number of TRX you would like to use to create this building. It must be a whole number and a perfect square.</small>
         	</div>
        </form>
        You will get approximately <span id = "will-earn">0</span> WRLD per month.
        <hr/>
       <center><button class = "btn btn-primary" id = "create"><img src = "img/building.png" width = "250px"/><br/>Create Building</button></center>
      </div>
    </div>
      <hr/>
	    <div class = "disclaimer">
	    	<p class = "lead">This page is an alpha page and is not for public release. If you're here accidentally, please do not play this game as it could result in significant losses. If you would like to help test this game, please join our <a href = "https://t.me/tworldbuilder">Telegram group</a> for details.</p>
	    </div>
	</body>
</html>