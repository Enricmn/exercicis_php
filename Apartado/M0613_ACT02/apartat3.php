<?php
$cartell = ['Tinc caca', 'Mestic cagan', 'Me da pereza', 'ir al baño', 'Merda me cagat'];

// torna la posicio del grup o -1 si no hi es
function buscaGrup(array $llista, string $grup){
  foreach ($llista as $pos => $nom) {
    if ($nom === $grup) {
      return $pos;
    }
  }
  return -1;
}

// stat => punts
$stats = [
  'Vida' => 130,
  'Forca' => 95,
  'Experiencia' => 640,
  'Nivell' => 7,
  'Atac base' => 12,
];

// fem copies pq les funcions d'ordenar canvien l'array
$copia1 = $stats;
$copia2 = $stats;
$copia3 = $stats;
$copia4 = $stats;

asort($copia1);
arsort($copia2);
ksort($copia3);
krsort($copia4);
/*explicacio Explica en un comentari la diferència entre asort() i ksort() */
// asort ordena pel valor (els punts) i ksort per la clau (el nom de l'stat)
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartat 3</title>
</head>
<body>
  <h1>Apartat 3 - Funcions d'arrays</h1>

  <h2>Exercici 1: Buscar un grup</h2>
  <?php
  if (in_array('Tinc caca', $cartell, true)) {
    echo "<p>Tinc caca hi es</p>";
  } else {
    echo "<p>Tinc caca no hi es</p>";
  }

  if (in_array('Ja no tinc caca', $cartell, true)) {
    echo "<p>Ja no tinc caca hi es</p>";
  } else {
    echo "<p>Ja no tinc caca no hi es</p>";
  }

  echo "<p>ir al baño esta a la posicio: " . buscaGrup($cartell, 'ir al baño') . "</p>";
  echo "<p>Ja no tinc caca esta a la posicio: " . buscaGrup($cartell, 'Ja no tinc caca') . "</p>";
  ?>

  <h2>Exercici 2: Les quatre ordenacions</h2>
  <h3>asort</h3>
  <pre><?php print_r($copia1); ?></pre>
  <h3>arsort</h3>
  <pre><?php print_r($copia2); ?></pre>
  <h3>ksort</h3>
  <pre><?php print_r($copia3); ?></pre>
  <h3>krsort</h3>
  <pre><?php print_r($copia4); ?></pre>

  <h2>Exercici 3: Barrejar el cartell</h2>
  <?php
  $barrejat = $stats;
  shuffle($barrejat);
  /*explicacio Explica què ha passat amb els noms dels grups */
  // el shuffle s'ha carregat les claus, ara son 0,1,2... i no saps de quin stat es cada numero
  ?>
  <pre><?php print_r($barrejat); ?></pre>

  <?php
  // ara amb els noms com a valor
  $sorteig = ['Vida', 'Forca', 'Experiencia', 'Nivell', 'Atac base'];
  shuffle($sorteig);
  ?>
  <ol>
    <?php foreach ($sorteig as $grup): ?>
      <li><?= $grup ?></li>
    <?php endforeach; ?>
  </ol>
</body>
</html>
