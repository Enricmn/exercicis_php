<?php
declare(strict_types=1);

//ex1

/**
 * aquesta l'escriu i prou
 *
 * @param float $base
 * @return void
 */
function preuAmbIvaEcho(float $base): void {
    echo $base * 1.21;
}

/**
 * aquesta el torna i en faig el que vull
 *
 * @param float $base
 * @return float
 */
function preuAmbIva(float $base): float {
    return $base * 1.21;
}

/**
 * dos decimals i EUR
 *
 * @param float $preu
 * @return string
 */
function formatPreu(float $preu): string {
    return number_format($preu, 2, ',', '.') . ' EUR';
}

//ex2

$preus = [79.90, 29.95, 289.00];

$total = 0.0;
foreach ($preus as $preu) {
    $total += preuAmbIva($preu);
}

//Intenta fer el mateix amb preuAmbIvaEcho()
//no es pot pq es void, el numero surt per pantalla pero no torna res (null)
//aixi que no el pots sumar ni passar-lo a formatPreu()
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartat 3</title>
  <link rel="stylesheet" href="estils.css">
</head>
<body>
  <h1>Apartat 3 - return no es echo</h1>

  <h2>Exercici 1</h2>
  <p>Amb echo: <?php preuAmbIvaEcho(79.90); ?></p>
  <p>Amb return: <?= formatPreu(preuAmbIva(79.90)) ?></p>

  <h2>Exercici 2</h2>
  <p>Total amb IVA: <?= formatPreu($total) ?></p>
  <p>El mes car amb IVA: <?= formatPreu(preuAmbIva(max($preus))) ?></p>
</body>
</html>
