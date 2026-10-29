<?php
echo 'Hola';
echo 'Hola', ' ', 'món';
echo '<p>Text</p>';

print 'Hola'; // retorna
var_dump($x); // per depurar
print_r($dades); // llegible))

$nom = 'Aina';
$edat = 19;
$actiu = true;

$nom = 'Bernat'; // es pot canviar
$total = $edat + 1;

echo $nom;

$x = 5; //int
$x = 'cinc'; //ra string

$a = '10' + 5; // 15 (int)
$b = '10' . 5; // 105 (tring)

var_dump($a, $b);

$nom = 'Aina';
echo 'Hola $nom';
echo "<br>";
// Hola $nom


$nom = 'Aina';
echo "Hola $nom";
echo "<br>";
// Hola Aina

$nom = 'Aina'; $punts = 8;

echo 'Hola ' . $nom . ', tens ' . $punts . ' punts';  //concatenacio amb .
echo "<br>";
echo "Hola $nom, tens $punts punts"; // interpolacio
echo "<br>";
echo "Hola {$nom}, tens {$punts} punts"; // interpolacio amb claus
echo "<br>";

define('IVA', 0.21);
const BOTIGA = 'Ca la Web';

echo BOTIGA; //sense $
$total = $base * (1 + IVA);
echo "<br>";
//IVA = 0.10; -> error

$missatge = 'Hola'; //ambit global
function saluda () {
  echo $missatge; //no la veu!
  $interh = 'Adeu'; // ambit global
}
saluda();
echo $intern; //tampoc es veu


/*
declare(strict_type=1); Primera linea del fitxer
ini_set('display_errors' , '1';); canvia un parametre nomes per a aquesta peticio
error_reporting(E_ALL); Decideix quins nivells d'error es tenen en compte ara mateix
setlocale() . date_default_timezone_set()  per establir la localitzacio i la zona horaria
*/
?>