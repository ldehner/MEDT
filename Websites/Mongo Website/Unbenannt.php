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
<title>Mahematik</title>
<link rel="stylesheet" type="text/css" href="php.css">
</head>

<body>
		 <a href="Mathe.pdf" download>
			 <button type="button" class="btn btn-indigo btn-lg" style="float: right;">Heft Modul 3</button>
			</a>
		
	
	
	
</body>
</html>
