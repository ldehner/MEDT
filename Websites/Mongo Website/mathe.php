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
<link rel="stylesheet" type="text/css" href="mathe.css">
<link rel="stylesheet" type="text/css" href="php.css">
</head>
<div id="navi">		
<nav>
   		<ul class="cf">
        <li  id="anders"><a class="dropdown" href="index2.php">Home</a>

        <li id="anders"><a class="dropdown" href="#">Fächer</a>

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
<body style="background: url(london.jpg) fixed center center no-repeat">
		 <a style="text-align: center" href="Mathe.pdf" download>
			 <button  type="button" class="btn btn-indigo btn-lg">Heft Modul 3</button>
			</a>
		<br />
		<a style="text-align: center" href="Mathe4.pdf" download>
			 <button  type="button" class="btn btn-indigo btn-lg">Heft Modul 4</button>
			</a>
	
	
	
</body>
</html>
