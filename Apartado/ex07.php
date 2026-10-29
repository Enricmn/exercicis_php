<?php
$nota = 7.5;

if ($nota >= 9) {
  $qualif='Exelect';
} else if ($nota >= 7) {
  $qualif= 'Notable';
} else if ($nota >= 5) {
  $qualif= 'Aprovat';
}else{
  $qualif= 'Suspes';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <!-- Forma bona -->
  <?php
   $estoc =0;
    ?>
  <?php if ($estoc > 0): ?>
    <p>En estoc</p>
  <?php else: ?>
    <p>Esgotat</p>
  <?php endif; ?>

  
  <?php if ($estoc > 0) { ?>
    <p>En estoc</p>
  <?php } else { ?>
    <p>Esgotat</p>
  <?php } ?>

  <!-- 
  if (....): ... endif;
  for(...): ... endfor:
  foreach (...): ... endforeach:
  -->

  <?php

  /* switch clasic*/
  $zona = 0;
  switch ($zona) {
    case 'local':
      $enviament = 0;
    case 'peninsula':
      $enviament = 4.96;
    default:
      $enviament = 9.95;
  }

  /* match php */
  $enviament = match ($zona){
    'local' => 0,
    'peninsula' => 4.95,
    default => 9.95,
  };

  ?>

  <?php
  $saldo = 0;
  $objectiu = 0;
  $anys = 0;
  for ($i = 1; $i <= 10; $i++){
    echo $i;
  }

  while ($saldo < $objectiu){
    $saldo *= 1.03;
    $anys++;
  }

  do{
    $n = rand(1,6);
  } while($n !== 6);
  ?>

  <!--tabla multiplicar del 7-->
  <table>
      <?php
      
      for ($i = 1; $i <= 10; $i++): ?>
        <tr>
          <td><?= $i ?> x 7</td>
          <td><?= $i * 7 ?></td>
        </tr>
      <?php endfor; ?>

  </table>
  <?php
  $colors = ['vermell', 'verd', 'blau'];

  echo $colors[0]; 
  echo count($colors);

  $colors[] = 'groc';

  print_r($colors);
  ?>

  <?php
  $producte = [
    'nom' => 'teclat mecanic',
    'preu' => 79.90,
    'estoc' => 4,
  ];

  echo $producte['nom'];
  $producte['preu'] = 69.90;
  ?>

  <?php
  foreach ($colors as $color) {
    echo "<li>$color</li>";
  }

  foreach ($producte as $clau => $color){
    echo"<dt> $clau</dt>";
    echo"<dd> $color</dd>";

  }

  ?>


  <?php
   $productes = [
      ['nom' => 'Teclat', 'preu' => 79.9],
      ['nom' => 'Ratoli', 'preu' => 24.5],
      ['nom' => 'Monitor', 'preu' => 189],
   ];
    ?>
   <?php foreach ($productes as $p): ?>
    <tr>
      <td><?= $p['nom'] ?></td>
      <td><?= $p['preu'] ?>EUR</td>
   </tr>
   <?php endforeach; ?>

   


</body>
</html>

<!--
count($a) = Quants elements te
in_array($x, $a, true) = Si un valor hi es (el true fa la comparacio estricta)
array_key_exist('k', $a) = si una clau existeix
sort / rsort / ksort = Ordena per valor o per clau
array_sum / max / min = suma, max, min
array_column($a, 'preu') = treu(mostra) una columna d'un array d'arrays
implode(',',$a) / explode = array a text / text a array
-->