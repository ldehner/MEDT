<?php
session_start();
$verhalten = 0;

if(!isset($_SESSION["username"]) and !isset ($_GET["page"])) {
	$verhalten = 0;
	?>
	<meta http-equiv="Refresh" content="0; URL=anfahrt.php">
	<?php
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Anfahrt</title>
		<link rel="stylesheet" href="php.css">
	</head>
	<body style="text-align: center;">
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
                <li id="anders"><a href="kontaktg.php">Kontakt</a></li>
				<li id="anders"><a href="anfrage.php">Kontakt Anfrage </a></li>
                

                
            </ul>
    </ul>
</nav>
		</div>
<div style="width: 600px"><iframe width="700" height="500" src="http://regiohelden.de/google-maps/map.php?width=600&amp;height=400&amp;hl=de&amp;q=1200%20Wien%20Wexstra%C3%9Fe%2019-23+(Fotostudio%20XD)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a style="font-size: 9px;" href="http://www.regiohelden.de/google-maps/" style="font-size: 9px;">Google Maps Generator</a> by <a href="http://www.regiohelden.de/">RegioHelden</a></iframe><br /><span style="font-size: 9px;"><a style="font-size: 9px;" href="http://www.regiohelden.de/google-maps/" style="font-size: 9px;">Google Maps Generator</a> by <a href="http://www.regiohelden.de/" style="font-size: 9px;">RegioHelden</a></span></div>
	</body>
</html>