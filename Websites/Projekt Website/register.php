<html>
	<head>
		<title>Registrieren</title>
		<link rel="stylesheet" href="php.css">
		<meta charset="utf-8">
	</head>
	<body>
		
				<div id="navi">		
<nav>
   		<ul class="cf">
        <li><a  class="dropdown" href="index.php">Home</a>  
        <li><a class="dropdown" href="login.php">Anmelden</a>
     
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
		<form id="form" action="registersenden.php?page=2" method="post">
			<input id="input" type="text" name="user" placeholder="Benutzername" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="text" name="email" placeholder="E-Mail" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="text" name="sicherheitsfrage" placeholder="Lieblingstier" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="submit" value="Senden" style="margin-bottom: 10px; border: solid#30940D;"/>
		</form>

	</body>
</html>