<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unbenanntes Dokument</title>
</head>

<body>
<?php

function passwort_generieren($_min_laenge, $_max_laenge, $_reihen, $_durchwirbn_n)
{
	$zeichen = array();
	foreach($_reihen as $reihe)
		$zeichen = array_merge($zeichen, $reihe);
	for ($i = 0 ; $i < $_durchwirbeln_n ; $i++)
		shuffle($zeichen);

	$passwort1 = '';
	$laenge = rand($_min_laenge , $_max_laenge);
	for ($i = 0 ; $i < $laenge ; $i++)
		$passwort1 .= $zeichen[array_rand($zeichen , 1)];

	return $passwort1;
}
//$reihen:
//muss ein Array aus Arrays (mindestens einem) sein
$reihen = array();
array_push($reihen, range('A' , 'Z'));
array_push($reihen, range('a' , 'z'));
array_push($reihen, range(0 , 9));

//bestimmen die minimale und maximale Länge des Passwortes
$min_laenge = 16;
$max_laenge = 24;

//bestimmt wie oft die Zeichenreihen durch einander
//gewirbelt werden sollen
// -> erhöht den Zufallseffekt
$durchwirbeln_n = 15;
$passwort1 = passwort_generieren($min_laenge, $max_laenge, $reihen, $durchwirbeln_n);		
?>

<?php
if($_GET["page"] == "log") {

$sicher = $_POST["sicherheitsfrage"];
$user = $_POST["user"];
$email = $_POST["email"];
	
		?><?php

$verbindung = mysql_connect("localhost", "accountname", "passwort") or die("Fehler im System");
			
	mysql_select_db("datenbankname") or die("Verbindung zur Datenbank war nicht möglich...");
			
	
	$abfrage = "SELECT * FROM login WHERE user = '$user' AND email = '$email'";
	
	$ergebnis = mysql_query($abfrage);
	if($row = mysql_fetch_object($ergebnis)){
		$kontrolle = 1;
	}
	
	
	if($kontrolle =! 0) {
	
		
		
		$verbindung = mysql_connect("localhost", "accountname", "passwort");
    mysql_select_db("datenbankname");

    $abfrage = "SELECT user FROM login WHERE user = '$user'";
    $ergebnis = mysql_query($abfrage);
    $pw_alt = mysql_fetch_object($ergebnis);


    
    $aendern = "UPDATE login SET passwort = '$passwort1'";
    $update = mysql_query($aendern);
    echo "Ihr Passwort wurde erfolgreich geändert, Sie werden auf die Login Seite geleitet...";
			$empf = $email;
			$betreff = "Passwort vergessen";
			$from = "From: ";
			$from .= "Fotostudio Dehner";
			$from .= " <";
			$from .= "fotostudio-dehner@gmx.at";
			$from .= ">\n";
			$from .= "Reply-To: ";
			$from .= $email;
			$from .= "\n";
			$from .= "Content-Type: text/html\n";
			$text = "Hallo $user, da Sie ihr Passwort vergessen haben haben wir es g&auml;ndert! <br />Ihr neues Passwort lautet: <br />$passwort1<br />Sie k&ouml;nnen Ihr Passwort unter:<br />--> $user --> Passwort &auml;ndern<br />&auml;ndern.<br />Wenn Sie fragen haben k&ouml;nnen Sie uns unter:<br/> &Uuml;ber uns --> Kontaktanfrage <br />eine Nachricht senden.<br />Viel Spass, Ihr Fotostudio Dehner Team";
	 		
	 		mail($empf, $betreff, $text, $from);
			
			$empf = "fotostudio-dehner@gmx.at";
			$betreff = "Passwort wurde vergessen";
			$from = "From: ";
			$from .= "Fotostudio Dehner";
			$from .= " <";
			$from .= "fotostudio-dehner@gmx.at";
			$from .= ">\n";
			$from .= "Reply-To: ";
			$from .= "fotostudio-dehner@gmx.at";
			$from .= "\n";
			$from .= "Content-Type: text/html\n";
			$text = "Der User: $user hat sein Passwort vergessen!<br />Sein neues Passwort lautet: <br />$passwort1<br />Sein Benutzername lautet:<br />$user<br />Seine E-Mail lautet:<br />$user";
						
			mail($empf, $betreff, $text, $from);
		}
echo"Sie werden jetzt weitergeleitet..."?> <meta http-equiv="Refresh" content="5; URL=login.php"><?php 
	}
	else{
		echo"Diese Daten sind nicht in unserer Datenbank";?>
		<meta http-equiv="Refresh" content="2 URL=vergessen.php"><?php
}
	?>
	</body>
</html>