<?php
	include 'header.php';
?>
<div id="container" class='newdate'>
	<h1>New Date</h1>
	<div>
		<p>Create a new custom date-time to count down to. This will then be available on a custom URL</p>
	</div>
	<form action="./collect.php" method="post">
		<p><span class='dateEntry'>Event name</span> (This has to be unique - please think imagineatively):</p>
		<p><input id="dateName" class="textField" type="text" name="name" /></p>
		<p class='dateEntry'>Date:</p>
		<p><input id="datepicker" type="date" name="date" /></p>
		<input type="submit" />
	</form>
<?php
	include 'connection.php';
	include 'footer.php';
?>
	<script>
		$("#datepicker").AnyTime_picker({format: "%Y-%m-%d-%H-%i-%s",
			formatUtcOffset: "%: (%@)",
			hideInput: true,
			placement: "inline"}
		);
		$("form").on("submit", validateForm);
	</script>
<?php
	include 'endscripts.php';
?>