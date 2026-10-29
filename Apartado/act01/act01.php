<?php
/**
* Tiquet corregit: s'han arreglat els 6 errors.
* Cada correcció està comentada al final de la seva línia.
*/

const IVA = 0.21;
$botiga = 'Tienda Molona'; // Error 1 : faltava el $ davant de la variable
$producte = 'Producto to flama'; // Error 2 : faltava el ; al final de la línia
$preu = 34.90;
$unitats = 2;
$subtotal = $preu * $unitats;
$importIva = $subtotal * IVA; // Error 3 : IVA és una constant i va sense $
$total = $subtotal + $importIva;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
   <meta charset="utf-8">
   <title>Tiquet</title>
</head>
<body>
   <h1><?= $botiga ?></h1> <!-- Error 5 : He tret el echo i he posat un =-->
   <p>Producte: <?= $producte ?></p>
   <p>Unitats: <?= $unitats ?></p>
   <?php
   echo '<p>Preu unitari: ' . $preu . ' EUR</p>'; // Error 4 : en PHP es concatena amb . i no amb +
   echo "<p>Subtotal: $subtotal EUR</p>"; // Error 6 : amb cometes dobles es mostra el valor de la variable
   ?>
   <p>IVA: <?= $importIva ?> EUR</p>
   <p>Total: <?= $total ?> EUR</p>
</body>
</html>