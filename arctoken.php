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
    <link rel="stylesheet" href="css/style.css">
	</head>
	<body>	
		<div class = "main">
			<h1 id="introduction">Introduction</h1>
			<p>There are numerous token standards that have emerged on Ethereum. Fewer token standards have been put in place on Tron. One option is simply to adopt the existing ERC standards and port then. TRC-20 does exactly that. However, another option is to try to come up with a new standard for Tron. ERC-1155 is an interesting standard, but it is fairly centralized. What would be great is to have something close to ERC-1155 but with less centralization. ERC-1155 functions as a standard for both fungible and non-fungible tokens and allows for melting to Enjin tokens.</p>
			<p>It is the Enjin token which is at the core of the standard. As an alternative, we want to develop an TRC-20 extension that manages the creation of fungible and non-fungible tokens, that can be melted to that TRC-20 token, and which can be bundled together for transfer.</p>
			<h1 id="the-idea">The Idea</h1>
			<p>The Arcadium Token (ARC) is a token that will primarily be used for the Aracadium virtual arcade project. There are two main components which differentiate the Arcadium smart contract from a standard TRC-20 contract.</p>
			<p>First, ARC is a multi-token system. ARC itself is a TRC-20 compliant token. However, the Arcadium smart contract can be used to create new item definitions and mint new items of that type. Items can be fungible or non-fungible. They can also be "soulbound," meaning that they cannot be moved to another address. In order to create tokens, a certain amount of ARC is needed. That ARC is bound to the item, but the item can be melted to recoup the ARC, similar to the melting process in ERC-1155.</p>
			<p>Second, ARC has "bundles." Think of bundles as bags of holding. They can be traded just like regular items, but they contain a whole bunch of items in them. It's an easy way to manage and transfer collections of items between users. When a bundle is created, a certain amount of ARC gets permanently locked away. A bundle can store tokens equal to a melt value of 100 times the construction cost. Bundles are complex data structures, so it is costly to add or remove items from them, but they are cheap and easy to transfer.</p>
			<p>Depending on how development goes, bundles may gain some other benefits through the Arcadium project, in the future, in order to improve their value.</p>
			<h1 id="initial-tokens">Initial Tokens</h1>
			<p>Some of the initial token ideas will be Aracadium winner's tokens. These tokens will be created and distributed as people will games in the virtual arcade. They will be soulbound, so only those who win can show them off. Aside from their melt value, they will also eventually be used to buy various special items through the arcade, including physical prizes.</p>
		</div>
	</body>
</html>