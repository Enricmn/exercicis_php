<?php
$preuBase = 99.99;
const IVA = 0.21;
$preuFinal = $preuBase *(1 + IVA);

const MONEDA = "€";
const BOTIGA = "Rise of Kingdoms";
const DESCOMPTE_SOCI = 0.15;
const DESC ="Esto es una tienda muy guay";
const PRODUCTE ="cuenta";
const DESCRIPCIO = "cuenta de ROK";
$estoc = 5;
const REF= "CUE-132412";

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rise Of Kingdoms</title>
  <link rel="stylesheet" href="style.css"> 
</head>
<body>

  <header>
    <h1><?=BOTIGA?></h1>
    <p><?= DESC?></p>
  </header>  

  <main>
    <article class="producte">
      <h2> <?= PRODUCTE ?></h2>
      <p class="descripcio"><?= DESCRIPCIO?></p>
      <p class="preu"> Preu sense IVA:  <?= number_format($preuBase,2,',') . MONEDA?></p>
      <p class="preu">IVA <?= IVA?>% : <?= number_format( $preuFinal,2,',' ). MONEDA?></p>
      <p class="total"> TOTAL: <?= number_format( $preuFinal,2,',' ). MONEDA?> </p>

      <p class="estoc"> Unitats disponibles: <?= $estoc?></p>
      <p class="ref"> <?= REF?> </p>
    </article>
  </main>

  <footer>
    <p> Footer de la tienda</p>
  </footer>

</body>
</html>