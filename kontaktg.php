<?php
session_start();
$verhalten = 0;

if(!isset($_SESSION["username"]) and !isset ($_GET["page"])) {
	$verhalten = 0;
	?>
	<meta http-equiv="Refresh" content="0; URL=kontakt.php">
	<?php
}
?>
<html>
	<head>
		<title>Kontakt</title>
		<link rel="stylesheet" href="php.css">
		<meta charset="utf-8">
	</head>
	<body background="ko.jpg">
		<br />
		
				<div id="navi">		
<nav>
   		<ul class="cf">
        <li  id="anders"><a class="dropdown" href="php2.php">Home</a>

        <li id="anders"><a class="dropdown" href="#">Bilder</a>
            <ul>
                <li id="anders"><a href="alle.php">Alle Bilder</a></li>
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
                
				<li id="anders"><a href="anfrage.php">Kontakt Anfrage </a></li>
                <li id="anders"><a href="anfahrtg.php">Anfahrt</a></li>

                
            </ul>
    </ul>
</nav>
		</div>
		<div class="content" style="margin-left: 90px; margin-right: 90px; margin-bottom: 90px; background-color: rgba(255,255,255,0.65)" >
		</br>
		<center>
			<h1>Kontakt Fotostudioxd</h1>
		  	<div id="Adresse">
				<h2><img src="33622.png" class="picleft" height="25" width="25"> Adresse</h2>
			 	Wexstraße 19-23 </br>
			  	1200 Wien</br>
			</div>
			</br>
		  	<div id="Adresse1">
	  			<h2><img src="Message-26.png" class="picleft" height="20" width="20"> E-Mail</h2>
				fotostudio-dehner@gmx.at</br></br>
		  	</div>
		  	<h2><img src="Clock-50.png" height="20px" width="20px"> Öffnungszeiten</h2>
		  	<div id="Öffnungszeiten">
				Montag-Freitag: 9:30-12-30 und 14:00-18:00 </br>
	Samstag: 11:30-17:00 </br>
		  	</div>
			</div>
		</center>
</br>
</br>
		</div>
		<div id="footer">
			<center>
				Ein Projekt des Schülers Linus Benedikt Dehner aus der 1|BHIT des TGM 
			</center>
		</div>
	</body>
</html>