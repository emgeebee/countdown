<?php
	include 'connection.php';
	$sql = "INSERT INTO counters (EventName, EventDate)
	VALUES ('".mysql_real_escape_string(htmlentities($_POST[name]))."', '".mysql_real_escape_string($_POST[date])."')";
//echo $sql;
	if (!mysql_query($sql,$con))
	{
		//echo('Error: ' . mysql_error());
	}
	header( 'Location: http://d-day.in/?'.mysql_insert_id());
	mysql_close($con);
?>