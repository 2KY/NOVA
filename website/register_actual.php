<html>
    <head>
		<title>Welcome <?php echo $_POST['uname']; ?>!</title>
		<link type="text/css" rel="stylesheet" href="internal/stylesheet.css"/>
	</head>
	
	<?php
		require_once("internal/connection.php");
	?>
	
	<body>
	
		<?php
			$username = $_POST['uname'];
			$password = $_POST['pass'];
			
			if( !isset($username) )
			{
		?>
				<script type="text/javascript">
					alert( "You must enter a username!" ); 
					history.back();
				</script>
		<?php
			}
			
			else if( !isset($password) )
			{
		?>
			<script type="text/javascript">
				alert( "You must enter a password!" );
				history.back();
			</script>
		<?php
			}
		?>
	
		Welcome to NOVA, <?php echo $_POST['uname']; ?> <br>
		Your password is <?php echo $_POST['pass']; ?> <br>
		
	</body>
</html>
