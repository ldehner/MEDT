<?php
session_start();
$verhalten = 0;

if(!isset($_SESSION["username"]) and !isset ($_GET["page"])) {
	$verhalten = 0;
	?>
	<meta http-equiv="Refresh" content="0; URL=index.php">
	<?php
}

$admin = 'Linus';
$benutzer = $_SESSION["username"];
$save = 0;
if($admin = $benutzer){
	$save = 1;
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mongo Public</title>
<link rel="stylesheet" href="php.css">
</head>

<body style="background: url(london.jpg) fixed center center no-repeat">
<div id="navi">		
<nav>
   		<ul class="cf">
        <li  id="anders"><a class="dropdown" href="index2.php">Home</a>

        <li id="anders"><a class="dropdown" href="#">Fächer</a>
            <ul>
                <li id="anders"><a href="mathe.php">Mathematik</a></li>
            </ul>
            </li>
        
        <li id="anders"><a class="dropdown" href="#"><?php	  echo $_SESSION["username"]	?></a>
            <ul>
					<?php
					if($save = 1){
						?><li id="anders"><a href="register.php">Jemanden registrieren</a></li>
						<?php
					}
						?>
					<li id="anders"><a href="account.php">Passwort ändern</a></li>
					<li id="anders"><a href="php3.php">Logout</a></li>
            		

            </ul>
        
        
           <li id="anders"><a class="dropdown" href="">Sonstiges</a>
            <ul>
                <li id="anders"><a href="zufall.php">Zufallszahlen Generator</a></li>
				<li id="anders"><a href="trash.php">Trash-Mailer</a></li>
                
            </ul>
    </ul>
</nav>
		</div>
			
</body>
</html>