<?php
// ex1

// assignacio directa
$grups[0] = 'Victor eres mi hijo';
$grups[] = 'Fans del Influ';
$grups[] = 'Tienda Molona';
$grups[8] = 'Producto to flama';
$grups[] = 'Blas por aqui no vuelvas mas';
/*explicacio Mira bé els índexs de $grups després del 8. Per què el grup següent no va a la posició 2? */
// no va a la 3 pq php agafa l'index mes alt (el 8) i li suma 1, els forats no els omple

// amb array() i amb funcions que ja tornen un array
$estils = array('Asesi', 'Teclat mecanic', 'Ratoli sense piles', 'Monitor de 189');
$edicions = range(2019, 2026);
$paraules = explode(' ', 'Pau ets el meu esclau i ho saps');

// copia pq despres $estils el torno a fer associatiu
$llistaEstils = $estils;

// ex2

// nom => el que li agrada, dos amb array() i dos a ma
$estils = array('Pepito' => 'Temple Run', 'Aina' => 'Rise of Kingdoms');
$estils['Bernat'] = 'Basquet a Santa Perpetua';
$estils['Carlos'] = 'Comprar cuentas de ROK';

// afegim un de nou
$estils['Oriol mira el sol'] = 'Fer bots que no van';

// ex3

$cartell = ['Vermell', 'Verd', 'Blau', 'Groc', 'Negre'];
$countAbans = count($cartell);

// borrem el tercer (index 2)
unset($cartell[2]);
$cartellUnset = $cartell;
$countDespres = count($cartell);

$cartell[] = 'Rosa com la cosa';
// va a la 5 i no a la 2, pq segueix mirant l'index mes alt

/*explicacio Explica en un comentari per què, després d'un unset(), un bucle for de 0 a count()-1 pot fallar */
// despres del unset queda un forat (0,1,3,4) i count val 4, aixi que el for
// busca el $cartell[2] que ja no existeix i a mes no arriba mai al 4
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartat 1</title>
</head>
<body>
  <h1>Apartat 1 - Crear arrays</h1>

  <h2>Exercici 1: Les tres maneres</h2>
  <!-- el pre respecta els espais i els salts de linia, aixi el print_r es veu ordenat -->
  <h3>$grups</h3>
  <pre><?php print_r($grups); ?></pre>
  <h3>$estils</h3>
  <pre><?php print_r($llistaEstils); ?></pre>
  <h3>$edicions</h3>
  <pre><?php print_r($edicions); ?></pre>
  <h3>$paraules</h3>
  <pre><?php print_r($paraules); ?></pre>

  <h3>print_r, var_dump i var_export</h3>
  <pre><?php print_r($llistaEstils); ?></pre>
  <pre><?php var_dump($llistaEstils); ?></pre>
  <pre><?php var_export($llistaEstils); ?></pre>
  <?php
  /*explicacio Mostra un dels arrays amb print_r(), var_dump() i var_export(), i escriu en un comentari quina diferència hi veus */
  // print_r nomes ensenya index i valor, var_dump tambe el tipus i la mida (va be per depurar)
  // i var_export et treu el codi php per tornar a fer l'array
  ?>

  <h2>Exercici 2: L'array associatiu</h2>
  <p>A en Pepito li agrada: <?= $estils['Pepito'] ?></p>
  <pre><?php print_r($estils); ?></pre>
  <p>Hi ha <?= count($estils) ?> grups</p>

  <h2>Exercici 3: Esborrar una casella</h2>
  <p>Count: <?= $countAbans ?></p>
  <pre><?php print_r($cartellUnset); ?></pre>
  <p>Count: <?= $countDespres ?></p>
  <pre><?php print_r($cartell); ?></pre>
</body>
</html>
