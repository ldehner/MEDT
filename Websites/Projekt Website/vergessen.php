<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Passwort vergessen</title>
<link rel="stylesheet" href="php.css">
</head>

<body>
		<form id="form" action="vergessen1.php?page=log" method="post">
			<input id="input" type="text" name="user" placeholder="Benutzername" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="text" name="email" placeholder="E-Mail" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="text" name="sicherheitsfrage" placeholder="Lieblingstier" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="submit" value="Senden" style="margin-bottom: 10px; border: solid#30940D;"/>
		</form>
</body>
</html>