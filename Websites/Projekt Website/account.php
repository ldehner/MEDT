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
		<title>Passwort ändern</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="php.css">
	</head>
    <body>
    		<div id="navi">		
<nav>
   		<ul class="cf">
        <li  id="anders"><a class="dropdown" href="index2.php">Home</a>

        <li id="anders"><a class="dropdown" href="#">Bilder</a>
            <ul>
                <li id="anders"><a href="alle.php">Alle Bilder</a></li>
                <li id="anders"><a href="alben.php">Alben</a></li>
                <li id="anders"><a href="high.php">Highlights</a></li>
            </ul>
            </li>
        
        <li id="anders"><a class="dropdown" href="#"><?php	  echo $_SESSION["username"]	?></a>
            <ul>
				
					
					<li id="anders"><a href="logout.php">Logout</a></li>
            		

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
    		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
   <br />
    <form id="form" action="pw2.php" method="post" >
    <input id="input" style="border: solid#000000;  width: 270px;" type="password" name="passwort_alt" placeholder="altes Passwort"/><br>
    <input id="input" style="border: solid#000000; width: 270px;" type="password" name="passwort_neu" placeholder="neus Passwort"/><br>
    <input id="input" style="border: solid#000000; width: 270px;" type="password" name="passwort_neu2" placeholder="Passwort wiederholen"/><br>
    <input id="input" style="border: solid#2BA700;  width: 270px;" type="submit" value="Ändern" />
    </form>
	</body>
</html>