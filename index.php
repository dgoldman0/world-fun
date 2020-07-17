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
      <div class = "rounded border">
        You've reached the World Builder mini-game site. You can spend time here earning $WRLD to use in our other projects.
      </div>
      <center><h1>Mini Games</h1></center>
      <div class = "row" style = "background-color: LightBlue;">
      	<div class = "col-md-2 rounded border" style = "margin: 5px; background-color: white;" id = "register-box">
    		<a href = "#" data-toggle="modal" data-target="#basicExampleModal"><img src = "img/logo2.png" style = "margin-top: 5px; margin-bottom: 5px" class = "rounded info"/></a>
    		<center><small>Register</small></center>
      		<div class = "rounded info" style = "margin-bottom: 5px">
      			Total Registered
      			<br/>
      			<span id = "total-registered">0</span>
      		</div>
      	</div>
      	<div class = "col-md-2 rounded border" style = "margin: 5px; background-color: white;">
    		<a href = "/faucet.php"><img src = "img/faucet_temp.jpg" style = "margin-top: 5px; margin-bottom: 5px" class = "rounded info"/></a>
    		<center><small>Faucet Game</small></center>
      		<div class = "rounded info" style = "margin-bottom: 5px">
      			Current Users
      			<br/>
      			<span id = "active-faucet">0</span>
      		</div>
      	</div>
      	<div class = "col-md-2 rounded border" style = "margin: 5px; background-color: white;">
    		<a href = "/waterfall.php"><img src = "img/waterfall.jpg" style = "margin-top: 5px; margin-bottom: 5px" class = "rounded info"/></a>
    		<center><small>Waterfall Game</small></center>
      		<div class = "rounded info" style = "margin-bottom: 5px">
      			Current Users
      			<br/>
      			<span id = "active-waterfall">0</span>
      		</div>
      	</div>
      	<div class = "col-md-2 rounded border" style = "margin: 5px; background-color: white;">
    		<a href = "medburn.php"><img src = "img/fire_temp.jpg" style = "margin-top: 5px; margin-bottom: 5px" class = "rounded info"/></a>
    		<center><small>Burner Game</small></center>
      		<div class = "rounded info" style = "margin-bottom: 5px; margin-right: 1px">
      			Current Users
      			<br/>
      			<span id = "active-mid">0</span>
      		</div>
      	</div>
      	<div class = "col-md-2 rounded border" style = "margin: 5px; background-color: white;">
    		<a href = "burner.php"><img src = "img/fire_temp.jpg" style = "margin-top: 5px; margin-bottom: 5px" class = "rounded info"/></a>
    		<center><small>Slow Burner</small></center>
      		<div class = "rounded info" style = "margin-bottom: 5px; margin-right: 1px">
      			Current Users
      			<br/>
      			<span id = "active-burner">0</span>
      		</div>
      	</div>
      	<div class = "col-md-2 rounded border" style = "margin: 5px; background-color: white;">
    		<a href = "rapid.php"><img src = "img/fire-ball.png" style = "margin-top: 5px; margin-bottom: 5px" class = "rounded info"/></a>
    		<center><small>Rapid Fire Burner</small></center>
      		<div class = "rounded info" style = "margin-bottom: 5px; margin-right: 1px">
      			Current Users
      			<br/>
      			<span id = "active-rapid">0</span>
      		</div>
      	</div>
      </div>
      <hr/>
      <p>We recommend using <a href = "https://brave.com/wor213">Brave web browser</a>. Brave rewards users for viewing ads, makes it easy to tip website content creators, and has security and privacy in mind, with local storage of user information, and Tor built in. Prefer to avoid government monopolized fiat but want the ease of access that comes with a debit card? Try <a href = "https://getblockcard.com/i/6uYHlCrU">Ternio's Blockcard</a>.</p>
      <p>We don't necessarily think of other dapps as competition. In fact, we're a huge fan of games like <a href = "https://blockchaincuties.com?inviter=67313675">Blockchain Cuties</a> and <a href = "https://splinterlands.io?ref=kirroyale">Splinterlands</a>, and believe that <a href = "https://www.publish0x.com/geekers-keeps/power-blockchain-based-games-lies-third-party-support-xzwxpn?a=olejYD5djN&tid=wbsite">the power of blockchain based gaming is in third party support</a>.</p>
      <p>Do not use bots to automate the activities in the game. It is not fair to other players. Terms subject to change.</p>
    </div>
	<!-- Modal -->
	<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	  aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        Registering will deposit 1,000 WRLD into your wallet, but costs energy. Do you want to continue?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	        <button type="button" class="btn btn-primary" data-dismiss="modal" id = "register">Register</button>
	      </div>
	    </div>
	  </div>
	</div>
  </body>
</html>
