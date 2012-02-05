<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<script>var savedEvent = 0;</script>
<?php
	$requestID = array_pop(explode('?', $_SERVER["REQUEST_URI"]));
echo '<script>console.log("'.intval($requestID).'");</script>';
	if(is_int(intval($requestID[0]))){
		$sql = 'SELECT * FROM `counters` WHERE `Key` = "'. $requestID . '"';
//echo "<script>console.log('".$sql."');</script>";
echo "<script>console.log('".$result."');</script>";
		$result = mysql_query($sql,$con);
		if($result){
			$row = mysql_fetch_row($result);	
				echo "<script>var savedEvent = ['".addslashes($row[1])."','".$row[2]."'];</script>";
//console.log(savedEvent);
			mysql_close($con);
		}
	}
?>

<!-- scripts concatenated and minified via ant build script-->

<script src="js/plugins.js"></script>
<script src="js/date.js"></script>