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
<html>
	<head>
		
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<title>Fotostudio Dehner</title>
		<link rel="stylesheet" type="text/css" href="php.css">
		<meta charset="utf-8">
		<style>
.mySlides {display:none;}
</style>
	
		
	</head>
	<body onLoad="slider()">
		<br />
		<div id="navi">		
<nav>
   		<ul class="cf">
        <li id="anders"><a  class="dropdown" href="index2.php">Home</a>  
        <li id="anders"><a  class="dropdown" href="#">Bilder</a>
            <ul>
			 <li id="anders"><a  href="logout.php">Alle Bilder</a></li>
                <li id="anders"><a  href="logout.php">Highlights</a></li>
                 <li id="anders"><a  href="logout.php">Alben</a></li>
            </ul>
        <li id="anders"><a  class="dropdown" href="#"><?php echo $_SESSION["username"]?></a>
               <ul>
               <li id="anders"><a  href="account.php">Passwort ändern</a></li>
                <li id="anders"><a  href="logout.php">Abmelden</a></li>
 				

            </ul>
        
        
           <li id="anders"><a  class="dropdown" href="#">Über Uns</a>
            <ul>

                
            </ul>

    </ul>
</nav>
		</div>
			

		<div class="content">
		
		





		
		</div>
	</body>
</html>