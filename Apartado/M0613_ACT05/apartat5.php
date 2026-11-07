<?php
declare(strict_types=1);

//ex1

/**
 * base per altura
 *
 * @param float $base
 * @param float $altura
 * @return float
 */
function area(float $base, float $altura): float {
    return $base * $altura;
}

/**
 * true si no en queda cap
 *
 * @param int $unitats
 * @return bool
 */
function esgotat(int $unitats): bool {
    return $unitats === 0;
}

//Anota l'error exacte de area('3', 4.0)
//area(): Argument #1 ($base) must be of type float, string given

//Per què és millor que PHP t'avisi en lloc de convertir pel seu compte
//pq si converteix sol pot amagar errors (un text rar d'un formulari i ni te n'adones)
//i si cal convertir ho faig jo amb (float) i es veu al codi
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartat 5</title>
  <link rel="stylesheet" href="estils.css">
</head>
<body>
  <h1>Apartat 5 - Els tipus i strict_types</h1>

  <h2>Exercici 1</h2>
  <p>Amb decimals: <?= area(3.5, 4.2) ?></p>
  <p>Amb enters: <?= area(3, 4) ?></p>

  <p>Amb text:
  <?php
  try {
      echo area('3', 4.0);
  } catch (TypeError $e) {
      echo 'Error de tipus: ' . $e->getMessage();
  }
  ?>
  </p>

  <p>Amb (float): <?= area((float) '3', 4.0) ?></p>

  <p>esgotat(0): <?= esgotat(0) ? 'Si' : 'No' ?></p>
  <p>esgotat(5): <?= esgotat(5) ? 'Si' : 'No' ?></p>
</body>
</html>
