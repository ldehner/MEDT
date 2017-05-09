<?php
session_start();
session_destroy();
?>
<html>
	<head>
		<title>Logout</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h3>Sie sind nun ausgeloggt, Sie werden auf die Startseite geleitet...</h3>
		<meta http-equiv="Refresh" content="2; URL=index.php">
	</body>
</html>