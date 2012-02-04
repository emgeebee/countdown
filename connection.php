<?php

	$dbhost = "localhost";
	$dbname = "countdown";
	$dbuser = "root";
	$dbpassword = "";

	$con = mysql_connect($dbhost,$dbuser,$dbpassword);
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	mysql_select_db($dbname, $con);
?>