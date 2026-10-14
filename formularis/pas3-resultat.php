<?php
/**
 * PAS 3 una sola pàgina
 * fins ara teniem dos fitxers, el formulari i el resultat
 * Mira com es fa la peticio i aixi fara una cosa o altre
 * La primmera visita es amb get i quan es prem el boto d'enviar es amb  POST
 */

$nom ='';
$correu = '';
$dia = '';

//var de control
$enviat = false;

//array predefinido $_SERVER nos da informacion del servidor

echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>