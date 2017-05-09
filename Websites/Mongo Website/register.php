<?php
session_start();

$admin = Linus;
$user = $_SESSION['username'];
if($user !=$admin) {
	
	?>
	<meta http-equiv="Refresh" content="0; URL=index2.php">
	<?php
}
else{
?>
<html>
	<head>
		<title>Registrieren</title>
		<link rel="stylesheet" href="php.css">
		<meta charset="utf-8">
	</head>
	<body style="background: url(london.jpg) fixed center center no-repeat">


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
			<form id="form" action="registersenden.php?page=2" method="post" style="position: absolute;
	left: 50%;
	top: 50%;
	-webkit-transform: translateX(-50%) translateY(-50%);
	transform: translateX(-50%) translateY(-50%);">
			<input id="input" type="text" name="user" placeholder="Benutzername" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="text" name="email" placeholder="E-Mail" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="password" name="passwort" placeholder="Passwort" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="text" name="sicherheitsfrage" placeholder="Lieblingstier" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="submit" value="Senden" style="margin-bottom: 10px; border: solid#30940D;"/>
		</form>
		
		

	</body>
</html>
<?php
}
?>