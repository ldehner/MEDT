<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Passwort ändern</title>
</head>

<body>
    <?php
	if($_POST["passwort_neu"]!=$_POST["passwort_neu2"]){
		echo"Dein gewünschtes Passwort hat nicht mit der Wiederholung übereingestimmt <a href='account.php'>zurück</a>";
	}
	else{
	$pwn = $_POST["passwort_neu"];
    $passwort_alt = md5($_POST["passwort_alt"]);
    $passwort_neu = md5($_POST["passwort_neu"]);
    $user = $_SESSION["username"];
	$email = $_SESSION["email"];

    $verbindung = mysql_connect("localhost", "fotostudiodehner", "internet02");
    mysql_select_db("fotostudiodehner");

    $abfrage = "SELECT passwort FROM login WHERE passwort = '$passwort_alt'";
    $ergebnis = mysql_query($abfrage);
    $pw_alt = mysql_fetch_object($ergebnis);


    if ($pw_alt->passwort == $passwort_alt)
    {$aendern = "UPDATE login SET passwort = '$passwort_neu'";
    $update = mysql_query($aendern);
    echo "Ihr Passwort wurde erfolgreich geändert, Sie werden auf die Login Seite geleitet...";
			$empf = $_SESSION["email"];
			$betreff = "Passwort Änderung";
			$from = "From: ";
			$from .= "Fotostudio Dehner";
			$from .= " <";
			$from .= "fotostudio-dehner@gmx.at";
			$from .= ">\n";
			$from .= "Reply-To: ";
			$from .= $_SESSION["email"];
			$from .= "\n";
			$from .= "Content-Type: text/html\n";
			$text = "Hallo $user, Ihr Passwort wurde erfolgreich ge&auml;ndert! <br />Ihr neues Passwort lautet: <br />$pwn<br />Sie k&ouml;nnen Ihr Passwort unter:<br />--> $user --> Passwort &auml;ndern<br />&auml;ndern.<br />Wenn Sie fragen haben k&ouml;nnen Sie uns unter:<br/> &Uuml;ber uns --> Kontaktanfrage <br />eine Nachricht senden.<br />Viel Spass, Ihr Fotostudio Dehner Team";
	 		
	 		mail($empf, $betreff, $text, $from);
			
			$empf = "fotostudio-dehner@gmx.at";
			$betreff = "Passwort Änderung";
			$from = "From: ";
			$from .= "Fotostudio Dehner";
			$from .= " <";
			$from .= "fotostudio-dehner@gmx.at";
			$from .= ">\n";
			$from .= "Reply-To: ";
			$from .= "fotostudio-dehner@gmx.at";
			$from .= "\n";
			$from .= "Content-Type: text/html\n";
			$text = "Der User: $user hat sein Passwort geaendert!<br />Sein neues Passwort lautet: <br />$pwn<br />Sein Benutzername lautet:<br />$user";
						
			mail($empf, $betreff, $text, $from);
	?>
	<meta http-equiv="Refresh" content="2; URL=login.php">
	<?php
	}

    else
    {echo "Das Passwort war falsch.
    <br /><a href=\"account.php\">zurück</a>.";}
	}?>
     
</body>
</html>