<?php
	
	require('includes/core.inc.php');
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Page Title -->
		<title>Chat App</title>
		
		<!-- Css Stylesheets -->
		<link type="text/css" rel="stylesheet" href="public/css/main.css">
	</head>
	<body>
		<div id="input">
			<div id="feedback"></div>
			<form action="index.php" method="post" id="form_input">
				<label>Enter Name:<input type="text" name="sender" id="sender"/></label>
				<label>Enter Message:<input type="text" name="message" id="message"/></label><br />
				<input type="submit" name="send" id="send" value="Send Message"/>
			</form>
		</div>
		
		<div id="messages">
			
		</div><!-- Messages -->
		
		<!-- JavaScript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/js/auto_chat.js"></script>
		<script type="text/javascript" src="scripts/js/send.js"></script>
	</body>
</html>