<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

<?php
	$requestID = array_pop(explode('?', $_SERVER["REQUEST_URI"]));
//echo '<script>console.log("'.is_int(intval($requestID)).'");</script>';
	if(is_int(intval($requestID))){
		$sql = 'SELECT * FROM `counters` WHERE `Key` = "'. $requestID . '"';
echo "<script>console.log('".$sql."');</script>";
		$result = mysql_query($sql,$con);
		if($result){
			$row = mysql_fetch_row($result);	
?>
			<script>
				var savedEvent = [<? echo "'".addslashes($row[1])."'" ?>, <? echo "'".$row[2]."'" ?>];
//console.log(savedEvent);
			</script>
<? 
			mysql_close($con);
		}
	}
?>

<!-- scripts concatenated and minified via ant build script-->

<script src="js/plugins.js"></script>
<script src="js/date.js"></script>