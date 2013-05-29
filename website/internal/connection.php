<?php
	$sql_host = "localhost";
	$sql_user = "root";
	$sql_pass = "";
	$sql_db = "website";
	
	$con = mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_db);
	
	if (mysqli_connect_errno())
	{
		echo "Can't connect to MySQL!";
	}
	else
	{
	}
?>