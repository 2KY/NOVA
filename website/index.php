<html>
    <head>
		<title>NOVA: Home</title>
		<link rel="stylesheet" type="text/css" href="internal/stylesheet.css">
	</head>
	
	<?php
		require_once("internal/connection.php");
	?>
	
	<body class="background">
	
	<div class="header">
		<div id="headertext">NOVA</div>
	</div>
	<div class="navigation">
		<div id="navigationitem">
		<a href="index.php">HOME</a> <a href="index.php">PROJECT INFO</a> <a href="index.php">COMMUNITY</a>
	</div>
	</div>
	<div class="content">
		<div id="serverarea">
			<!-- Servers --!>
			<div id="serverheader">
				<strong>Active NOVA Servers</strong>
			</div>
			<div id="servername">
				<div id="serverimage">
					<img src="images/samp_logo.png" alt="San Andreas Multiplayer (www.sa-mp.com)"/>
				</div>
				<strong>NOVA Roleplay</strong>
				<div id="serverstatus">
					Server Status: Online
				<div id="serverconnect">
					(<a href="samp:127.0.0.1:7777">127.0.0.1:7777</a>)
				</div>
				</div>
			</div>
		</div>
		<div id="accountarea">
			<div id="accountheader">
				<strong>Account Area</strong>
			</div>
			<div id="accountname">
				<strong>The2KY</strong>
			</div>
			<div id="accountavatar">
				<img src="images/wolfrun.gif"/>
			</div>
			<div id="accountinfo">
				Last visited: 5/25/2013
			</div>
		</div>
		<div id="eventarea">
			<div id="eventheader">
				<strong>NOVA Tournaments/Events</strong>
			</div>
			<!-- Event images are 790x100 --!>
			<img src="images/activeevent.png"/>
		</div>
	</div>
	</body>
</html>
