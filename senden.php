<?php
session_start();
$verhalten = 0;

if(!isset($_SESSION["username"]) and !isset ($_GET["page"])) {
	$verhalten = 0;
	?>
	<meta http-equiv="Refresh" content="0; URL=index.php">
	<?php
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kontakt</title>
</head>

<body>
	<?php 
		
		if($_POST['betreff']!="" and $_POST['nachricht']!="") {
			$empf = "fotostudio-dehner@gmx.at";
			$betreff = $_POST['betreff'];
			$from = "From: ";
			$from .= $_SESSION["username"];
			$from .= " <";
			$from .= $_SESSION["email"];
			$from .= ">\n";
			$from .= "Reply-To: ";
			$from .= $_SESSION["email"];
			$from .= "\n";
			$from .= "Content-Type: text/html\n";
			$text = $_POST['nachricht'];
			
			mail($empf, $betreff, $text, $from);
			echo "Vielen Dank, Sie werden jetzt wieder auf die Startseite geleitet!";
			?>
			<meta http-equiv="Refresh" content="2; URL=index2.php">
			<?php
		}
		else {
			echo "Bitte alle Felder ausfüllen...";
		}
			
	?>
</body>
</html>