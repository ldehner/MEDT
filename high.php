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
<title>Highlights</title>
<link rel="stylesheet" href="php.css">
</head>

<body>

		<div id="navi">		
<nav>
   		<ul class="cf">
        <li  id="anders"><a class="dropdown" href="php2.php">Home</a>

        <li id="anders"><a class="dropdown" href="#">Bilder</a>
            <ul>
                <li id="anders"><a href="alle.php">Alle Bilder</a></li>
                <li id="anders"><a href="alben.php">Alben</a></li>
                
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

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="b.jpg" style="width:100%">
  <img class="mySlides" src="bi.jpg" style="width:100%">
  <img class="mySlides" src="bil.jpg" style="width:100%">
  <img class="mySlides" src="bild.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>
</body>
</html>