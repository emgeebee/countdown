<?php
	include 'connection.php';
	$sql = "INSERT INTO counters (EventName, EventDate)
	VALUES ('".$_POST[name]."', '".$_POST[date]."')";
	
	
	if (!mysql_query($sql,$con))
	{
		//echo('Error: ' . mysql_error());
	}
	header( 'Location: http://d-day.in/?id='.mysql_insert_id());
	mysql_close($con);
?>