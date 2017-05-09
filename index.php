<?php
session_start();
$verhalten = 0;

if(!isset($_SESSION["username"]) and!isset($_SESSION["email"])and !isset ($_GET["page"])) {
	$verhalten = 0;
}

if($_GET["page"] == "log") {

$user = $_POST["user"];
$passwort = md5($_POST["passwort"]);
$email = $_POST["email"];
	
$verbindung = mysql_connect("localhost", "fotostudiodehner", "internet02") or die("Fehler im System");
			
	mysql_select_db("fotostudiodehner") or die("Verbindung zur Datenbank war nicht möglich...");
			
	
	$abfrage = "SELECT * FROM login WHERE user = '$user' AND passwort = '$passwort' AND email = '$email'";
	$ergebnis = mysql_query($abfrage);
	if($row = mysql_fetch_object($ergebnis)){
		$kontrolle = 1;
	}
	
	
	
	
	if($kontrolle = 1) {
		$_SESSION["username"] = $user;
		$_SESSION["email"] = $email;
		$verhalten = 1;
	}
	else{
		$verhalten = 2;
	}
}

?>
<html>
	<head>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<title>Fotostudio Dehner</title>
<link rel="stylesheet" href="php.css">
<meta charset="utf-8">
	
		<?php
		if($verhalten == 1) {
		?>
			<meta http-equiv="Refresh" content="0; URL=loading.php">
		<?php
		}
		?>
		
	</head>
	<body>
	
		<?php
			if($verhalten == 0){
		?>
		
		
		
		<div id="navi">		
<nav>
   		<ul class="cf">
        <li><a  class="dropdown" href="index.php">Home</a>  
        <li><a class="dropdown" href="#">Mein Bereich</a>
            <ul>
                <li><a href="login.php">Anmelden</a></li>
                <li><a href="register.php">Registrieren</a></li>
                <li><a href="vergessen.php">Passwort vergessen?</a></li>

            </ul>
        
        
           <li><a class="dropdown" href="#">Über Uns</a>
            <ul>
                <li><a href="kontakt.php">Kontakt</a></li>
                <li><a href="anfahrt.php">Anfahrt</a></li>
                
            </ul>
    </ul>
</nav>
		</div>
		
		
		<div class="content" style="margin-left: 90px; margin-right: 90px;" >
		<br>
			

		
<div class="w3-content w3-section" style="max-width:500px; position: absolute;
	left: 50%;
	top: 50%;
	-webkit-transform: translateX(-50%) translateY(-50%);
	transform: translateX(-50%) translateY(-50%);">
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

		<br>
		<br>
		<br>

		</div>
		<?php
			}
			if($verhalten == 1) {	
		?>
		<div id="boxx" style="background-color: black;">
		<div id="box">
		<img src="cool-loading-animated-gif-3.gif" />
		</div>
		</div>
<?php
			}
			if($verhalten == 2) {	
		?>
		Sie haben sich mit den falschen Daten eingeloggt
		<meta http-equiv="Refresh" content="3; URL=login.php">.
		<?php
			}
		?>
	</body>
</html>