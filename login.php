<!doctype html>
<html>
<head>
<link rel="stylesheet" href="php.css">
<meta charset="utf-8">
<title>Anmelden</title>
</head>

<body>
			<div id="navi">		
<nav>
   		<ul class="cf">
        <li><a  class="dropdown" href="index.php">Home</a>  
        <li><a class="dropdown" href="#">Mein Bereich</a>
                <ul>
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
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<div id="login">
		<form id="form" method="post" action="index.php?page=log";>
			<input id="input" type="text" name="user" placeholder="Benutzername" style="margin-bottom: 10px; border: solid#646464;"  /><br />
			<input id="input" type="text" name="email" placeholder="E-Mail" style="margin-bottom: 10px; border: solid#646464;"  /><br />
			<input id="input" type="password" name="passwort" placeholder="Passwort" style="margin-bottom: 10px; border:solid#646464;"/><br />
			<input id="input" type="submit" value="Einloggen"style="color: limegreen;border: solid#30940D;"/>
		</form>
	</div>



</body>
</html>