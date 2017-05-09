<?php
session_start();
$verhalten = 0;

if(!isset($_SESSION["username"]) and!isset($_SESSION["email"])and !isset ($_GET["page"])) {
	$verhalten = 0;
}

if($_GET["page"] == "log") {
/*
	$user = $_POST["user"];
	$passwort = $_POST["passwort"];
*/
$user = $_POST["user"];
$passwort = md5($_POST["passwort"]);
$email = $_POST["email"];
	
$verbindung = mysql_connect("localhost", "accountname", "passwort") or die("Fehler im System");
			
	mysql_select_db("datenbankname") or die("Verbindung zur Datenbank war nicht möglich...");
			
	
	$abfrage = "SELECT * FROM login WHERE user = '$user' AND passwort = '$passwort' AND email = '$email'";
	$ergebnis = mysql_query($abfrage);
	if($row = mysql_fetch_object($ergebnis)){
		$kontrolle = 1;
	}
	
	
	
	
	if($kontrolle != 0) {
		$_SESSION["username"] = $user;
		$_SESSION["email"] = $email;
		$verhalten = 1;
	}
	else{
		$verhalten = 2;
	}
}
/*
else{
	echo "geht nicht";
}
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mongo Public</title>
<link rel="stylesheet" href="php.css">


<meta charset="utf-8">
	
		<?php
		if($verhalten == 1) {
		?>
			<meta http-equiv="Refresh" content="3; URL=index2.php"
		<?php
		}
		?>
		
	</head>
	<body style="background: url(streifen.gif) no-repeat fixed; ">
		<?php
			if($verhalten == 0){
		?>
	<div id="login">
		<form id="form" method="post" action="index.php?page=log" action="index2.php" style="position: absolute;
	left: 50%;
	top: 50%;
	-webkit-transform: translateX(-50%) translateY(-50%);
	transform: translateX(-50%) translateY(-50%);";>
			<input id="input" type="text" name="user" placeholder="Benutzername" style="rgba(44,177,63,0.72); margin-bottom: 10px; border: solid#646464;"  /><br />
			<input id="input" type="text" name="email" placeholder="E-Mail" style="rgba(44,177,63,0.72);margin-bottom: 10px; border: solid#646464;"  /><br />
			<input id="input" type="password" name="passwort" placeholder="Passwort" style="rgba(44,177,63,0.72);margin-bottom: 10px; border:solid#646464;"/><br />
			<input id="input" type="submit" value="Einloggen" style=" background: (0,0,0,0.68); border: solid#30940D;"/>
		</form>
	</div>
	<?php
			}
			if($verhalten == 1) {	
		?>
		Sie haben sich eingeloggt, Sie werden jetzt auf die Hauptseite weitergeleitet ...
		<?php

			}
			if($verhalten == 2) {	
		?>
		Sie haben sich mit den falschen Daten eingeloggt, <a href="index.php">zurück</a>.
		<?php
			}
		?>
</body>
</html>