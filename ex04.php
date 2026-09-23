<?php

/*
Aquest fitxer te 6 errors: 3 de sintaxi (PHP no arrenca)
i 3 de logica (funciona, pero el resultat no es correcte)

Arreglel's d'un en un comprovant la pagina despres de cada canvi
Anota a error-trobats.md quin era, com te n'has adonat i com l'has resolt

*/


// le falta el $ a nom
$nom = 'Aina';

//falta el ;
$assignatura = 'Desenvolupament web';

$nota1 = 7;
$nota2 = 9;

// falta el ()
$mitjana = ($nota1 + $nota2) / 2;


echo '<h1> Bulleti de notes</h1>';
// cambiar el '' por ""
echo "<p> Alumna: $nom </p>";

//Sacar las '' y el + que rodeo $assignatura
echo '<p> Assignatura: ' . $assignatura .'</p>';
//falta  la ultima "
echo "<p>Mitjana: $mitjana</p>";


echo '<p>Generalitat el ' . date('d/m/Y') . '</p>';

?>