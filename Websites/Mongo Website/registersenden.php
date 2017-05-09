<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrieren</title>
</head>

<body>
<?php


		
?>
<?php
if(isset($_GET["page"])){
	if($_GET["page"] == "2"){
		$user = $_POST["user"];
		$email = $_POST["email"];
		$passwort1 = $_POST["passwort"];
		$passwort = (md5($passwort1));
		$sicher = $_POST["sicherheitsfrage"];
		
			$verbindung = mysql_connect("localhost", "mongopublic", "haha1234") or die("Fehler im System");
			
			mysql_select_db("mongopublic") or die("Verbindung zur Datenbank war nicht möglich...");
			
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
			$from .= "Mongo Public";
			$from .= " <";
			$from .= "mongo-public@gmx.at";
			$from .= ">\n";
			$from .= "Reply-To: ";
			$from .= $_POST['email'];
			$from .= "\n";
			$from .= "Content-Type: text/html\n";
			$text = "Danke $user, dass Sie sich auf <a  class='button' href='index.php'>Mongo-Public</a> registriert haben! <br />Ihnen stehen jetzt viele neue und hilfreiche Features zur Verf&uuml;gung!<br />Ihr Passwort lautet: <br />$passwort1<br />Ihre Sicherheitsantwort lautet:<br/>$sicher<br/>Sie k&ouml;nnen Ihr Passwort unter:<br />--> $user --> Passwort &auml;ndern<br />&auml;ndern.<br />Wenn Sie fragen haben k&ouml;nnen Sie uns unter:<br/> &Uuml;ber uns --> Kontaktanfrage <br />eine Nachricht senden.<br />Viel Spass, Ihr Mongo Public Team";
			
			mail($empf, $betreff, $text, $from);
			
			$empf = "mongo-public@gmx.at";
			$betreff = "Neuer User";
			$from = "From: ";
			$from .= "Mongo Public";
			$from .= " <";
			$from .= "mongo-public@gmx.at";
			$from .= ">\n";  
			$from .= "Reply-To: ";
			$from .= "mongo-public@gmx.at";
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
				<meta http-equiv="Refresh" content="5; URL=anmelden.php">
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