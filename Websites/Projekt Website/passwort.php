<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unbenanntes Dokument</title>
</head>

<body>
<?php
function passwort_generieren($_min_laenge, $_max_laenge, $_reihen, $_durchwirbn_n)
{
	$zeichen = array();
	foreach($_reihen as $reihe)
		$zeichen = array_merge($zeichen, $reihe);
	for ($i = 0 ; $i < $_durchwirbeln_n ; $i++)
		shuffle($zeichen);

	$passwort = '';
	$laenge = rand($_min_laenge , $_max_laenge);
	for ($i = 0 ; $i < $laenge ; $i++)
		$passwort .= $zeichen[array_rand($zeichen , 1)];

	return $passwort;
}
//$reihen:
//muss ein Array aus Arrays (mindestens einem) sein
$reihen = array();
array_push($reihen, range('A' , 'Z'));
array_push($reihen, range('a' , 'z'));
array_push($reihen, range(0 , 9));

//bestimmen die minimale und maximale Länge des Passwortes
$min_laenge = 18;
$max_laenge = 21;

//bestimmt wie oft die Zeichenreihen durch einander
//gewirbelt werden sollen
// -> erhöht den Zufallseffekt
$durchwirbeln_n = 15;
$passwort = passwort_generieren($min_laenge, $max_laenge, $reihen, $durchwirbeln_n);
	?>
	
</body>
</html>