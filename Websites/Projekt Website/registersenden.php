<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrieren</title>
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
if(isset($_GET["page"])){
	if($_GET["page"] == "2"){
		$user = $_POST["user"];
		$email = $_POST["email"];
		$passwort = (md5($passwort1));
		$sicher = $_POST["sicherheitsfrage"];
		
			$verbindung = mysql_connect("localhost", "accountname", "passwort") or die("Fehler im System");
			
			mysql_select_db("datenbankname") or die("Verbindung zur Datenbank war nicht möglich...");
			
			$control = 0;
			$abfrage = "SELECT user FROM login WHERE user = '$user'";
			$abfrage2 = "SELECT email FROM login WHERE email = '$email'";
			$ergebnis = mysql_query($abfrage);
			$ergebnis2 = mysql_query($abfrage2);
			while($row = mysql_fetch_object($ergebnis)){
				$control++;
			}
			while($row = mysql_fetch_object($ergebnis2)){
				$control++;
			}
			if($control != 0){
				echo "Benutzername oder e-mail schon vergeben. Bitte verwende einen anderen Benutzernamen oder eine andere e-mail...<a href=\"register.php\">zurück</a>";
				
			}
			else{
			$eintrag = "INSERT INTO login
			(user, passwort, email, sicherheitsfrage)
			
			VALUES
			('$user', '$passwort', '$email', '$sicher')";
				
			
					if($_POST['user']!="" and $_POST['email']!="" and ($_POST['sicherheitsfrage']!="")) {
						$eintragen = mysql_query($eintrag);
			$empf = $_POST['email'];
			$betreff = "Registrierung";
			$from = "From: ";
			$from .= "Fotostudio Dehner";
			$from .= " <";
			$from .= "fotostudio-dehner@gmx.at";
			$from .= ">\n";
			$from .= "Reply-To: ";
			$from .= $_POST['email'];
			$from .= "\n";
			$from .= "Content-Type: text/html\n";
			$text = "Danke $user, dass Sie sich registriert haben! <br />Ihnen stehen jetzt viele neue und hilfreiche Features zur Verf&uuml;gung!<br />Ihr Passwort lautet: <br />$passwort1<br />Ihre Sicherheitsantwort lautet:<br/>$sicher<br/>Sie k&ouml;nnen Ihr Passwort unter:<br />--> $user --> Passwort &auml;ndern<br />&auml;ndern.<br />Wenn Sie fragen haben k&ouml;nnen Sie uns unter:<br/> &Uuml;ber uns --> Kontaktanfrage <br />eine Nachricht senden.<br />Viel Spass, Ihr Fotostudio XD Team";
			
			mail($empf, $betreff, $text, $from);
			
			$empf = "fotostudio-dehner@gmx.at";
			$betreff = "Neuer User";
			$from = "From: ";
			$from .= "Fotostudio Dehner";
			$from .= " <";
			$from .= "fotostudio-dehner@gmx.at";
			$from .= ">\n";  
			$from .= "Reply-To: ";
			$from .= "fotostudio-dehner@gmx.at";
			$from .= "\n";
			$from .= "Content-Type: text/html\n";
			$text = "Der User: $user hat sich registriert!<br />Sein Passwort lautet: <br />$passwort1<br />Sein Benutzername lautet:<br />$user<br/>Seine Sicherheitsantwort lautet:<br/>$sicher <br/>Seine E-Mail lautet:<br />$email";
						
			mail($empf, $betreff, $text, $from);
		}
		else {
			echo "Bitte alle Felder ausfüllen...";
		}
			if($eintragen == true) {
		?><h1>Vielen Dank! Ihr Passwort ist in Ihren E-Mails. Ihr Account ist jetzt fertig, Sie werden jetzt weitergeleitet...</h1>
				<meta http-equiv="Refresh" content="5; URL=login.php">
				<?php
			}
			else {
				echo "Fehler im System :( bitte versuche es später erneut...";
			}
			mysql_close($verbindung);
			}
		}
	}

?>
</body>
</html>