<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zufall Zahlen Generator</title>
</head>

<body>

	
	
	<form id="form" action="zufall.php" method="post">
			<input id="input" type="text" name="personen" placeholder="Personen" style="margin-bottom: 10px; border: solid#646464;"/><br />
			<input id="input" type="submit" value="Senden" style="margin-bottom: 10px; border: solid#30940D;"/>
		</form>
	
<?php	
	$personen = $_POST["personen"];
function passwort_generieren($_min_laenge, $_max_laenge, $_reihen, $_durchwirbn_n)
{
	$zeichen = array();
	foreach($_reihen as $reihe)
		$zeichen = array_merge($zeichen, $reihe);
	for ($i = 0 ; $i < $_durchwirbeln_n ; $i++)
		shuffle($zeichen);

	$passwort1 = '';
	$laenge = rand($_min_laenge , $_max_laenge);
	for ($i = 0 ; $i < $laenge ; $i++)
		$passwort1 .= $zeichen[array_rand($zeichen , 1)];

	return $passwort1;
}
//$reihen:
//muss ein Array aus Arrays (mindestens einem) sein
$reihen = array();
array_push($reihen, range(1 , $personen));

//bestimmen die minimale und maximale Länge des Passwortes
	
if($personen >=100){
$min_laenge = 1;
$max_laenge = 3;
}	
if($personen >= 10){
	$min_laenge = 1;
	$max_laenge = 2;
}
if($personen <= 10){
$min_laenge = 1;
$max_laenge = 1;
}
//bestimmt wie oft die Zeichenreihen durch einander
//gewirbelt werden sollen
// -> erhöht den Zufallseffekt
$durchwirbeln_n = 15;
$passwort1 = passwort_generieren($min_laenge, $max_laenge, $reihen, $durchwirbeln_n);		
?>
	<h1 style="text-align: center;">Die Zahl lautet: <?php echo "$passwort1" ?></h1>
</body>
</html>