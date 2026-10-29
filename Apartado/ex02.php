<?php
// Declaramos una constante IVA (no cambia de valor)
const IVA = 0.21;
$producte = 'Teclat';
$base = 79.90;
$estoc = 4;
// funcion predefinida para redondear
$total = round($base * (1 + IVA), 2);
$nom = 'Enric';
$cognom = 'Marques';
$direccio = 'Av setnemat 83 G'
?>

<h2> <?php echo $producte ?></h2>

<p>Preu amb IVA: <?= $total;  ?> EUR </p>

<p>Disponibilitat: <?php echo $producte ?></p>

<h2>Dades Personals</h2>

<p>En nom es: <?= $nom . ' ' .$cognom ?></p>
<p> Direcció: <?= $direccio ?></p>

