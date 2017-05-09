<?php
session_start();
session_destroy();
?>
<html>
	<head>
		<title>Loading...</title>
		<meta charset="utf-8">
		
	</head>
	<body style="text-align: center; background-color: white;position: absolute;
	left: 50%;
	top: 50%;
	-webkit-transform: translateX(-50%) translateY(-50%);
	transform: translateX(-50%) translateY(-50%);">
		<h1 style="color: black; text-align: center center;">Sie sind nun ausgeloggt, Sie werden auf die Startseite geleitet...</h1>
		<img src="cool-loading-animated-gif-3white.gif">
		<meta http-equiv="Refresh" content="4; URL=index.php">
	</body>
</html>