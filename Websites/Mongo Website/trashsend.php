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
<html>
<head>
	<title>Trash-Mail-Sender</title>
	<meta charset="utf-8">
</head>
	<body>
	
		<?php
			$texxt = $_POST['text'];
			$vonanhang = $_POST['vonanhang'];
			$von = $_POST['von'];
			$tabu = 'tgm.ac.at';
			$an = $_POST['an'];
			$anhang = $_POST['anhang'];
		
			$empf = "$an@$anhang";
			$betreff = $_POST['betreff'];
			$from = "From: ";
			$from .= $_POST['wem'];
			$from .= " <";
			$from .= "$von@$vonanhang";
			$from .= ">\n";
			$from .= "Reply-To: ";
			$from .= "$von@$vonanhang";
			$from .= "\n";
			$from .= "Content-Type: text/html\n";
			$text = $texxt;
			
		if($vonanhang == $tabu){
			echo"SIE KÖNNEN KEINE EMAIL VON tgm.ac.at SENDEN!"
			?>
			
			<meta http-equiv="Refresh" content="3; URL=trash.php">
			<?php
		}
		else{
			mail($empf, $betreff, $text, $from);
		
?>
<h1>Vielen Dank! Ihre Trash-Mail wurde versendet!</h1>
				<meta http-equiv="Refresh" content="3; URL=index2.php">
				<?php
		}
		?>
	</body>
</html>