<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->

<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->

<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>D-Day.in, your personal countdown timer</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/date.css">
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

	<script src="js/libs/modernizr-2.0.6.min.js"></script>
	<script src="js/functions.js"></script>

<?php
	include 'connection.php';
	$requestID = array_pop(explode('?', $_SERVER["REQUEST_URI"]));
//echo '<script>console.log("'.is_int(intval($requestID)).'");</script>';
	if(is_int(intval($requestID))){
		$sql = 'SELECT * FROM `counters` WHERE `Key` = "'. $requestID . '"';
//echo "<script>console.log('".$sql."');</script>";
		$result = mysql_query($sql,$con);
		if($result){
			$row = mysql_fetch_row($result);
	
?>
			<script>
				var savedEvent = [<? echo "'".addslashes($row[1])."'" ?>, <? echo "'".$row[2]."'" ?>];
				console.log(savedEvent);
			</script>
<? 
			mysql_close($con);
		}
	}
?>

</head>
<body>


<div id="container">
	<div id="clock"></div>
	<div id="newDate">
		<a href="#">New Custom Date</a>
	</div>
	<div id="main" role="main" class="hiddenForm">

		<form action="/collect.php" method="post">
			<p>Event name:</p>
			<p><input class="textField" type="text" name="name" /></p>
			<p>Date:</p>
			<p><input id="datepicker" type="date" name="date" /></p>
			<input type="submit" />
		</form>
	</div>
</div> <!--! end of #container -->



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>



<!-- scripts concatenated and minified via ant build script-->

<script src="js/plugins.js"></script>
<script src="js/date.js"></script>
<script src="js/script.js"></script>

<!-- end scripts-->



<script>

	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID

	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;

	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';

	s.parentNode.insertBefore(g,s)}(document,'script'));

</script>

</body>
</html>
