<?php
session_start();
$verhalten = 0;

if(!isset($_SESSION["username"]) and !isset ($_GET["page"])) {
	$verhalten = 0;
	?>
	<meta http-equiv="Refresh" content="0; URL=php.php">
	<?php
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unbenanntes Dokument</title>
<link rel="stylesheet" href="php.css">
</head>

<body>
		<div id="navi">		
<nav>
   		<ul class="cf">
        <li  id="anders"><a class="dropdown" href="php2.php">Home</a>

        <li id="anders"><a class="dropdown" href="#">Bilder</a>
            <ul>
                
                <li id="anders"><a href="alben.php">Alben</a></li>
                <li id="anders"><a href="high.php">Highlights</a></li>
            </ul>
            </li>
        
        <li id="anders"><a class="dropdown" href="#"><?php	  echo $_SESSION["username"]	?></a>
            <ul>
				<li id="anders"><a href="downloads.php">Downloads</a></li>
					<li id="anders"><a href="account.php">Passwort ändern</a></li>
					<li id="anders"><a href="php3.php">Logout</a></li>
            		

            </ul>
        
        
           <li id="anders"><a class="dropdown" href="#">Über Uns</a>
            <ul>
                <li id="anders"><a href="kontaktg.php">Kontakt</a></li>
				<li id="anders"><a href="anfrage.php">Kontakt Anfrage </a></li>
                <li id="anders"><a href="anfahrtg.php">Anfahrt</a></li>

                
            </ul>
    </ul>
</nav>
		</div>
</body>
</html>