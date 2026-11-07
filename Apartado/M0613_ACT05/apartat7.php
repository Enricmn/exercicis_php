<?php
declare(strict_types=1);

$productes = [
    ['nom' => 'Teclat mecanic RGB', 'categoria' => 'teclats', 'preu' => 79.90, 'estoc' => 4],
    ['nom' => 'Ratoli vertical', 'categoria' => 'ratolins', 'preu' => 29.95, 'estoc' => 7],
    ['nom' => 'Monitor 27" QHD', 'categoria' => 'monitors', 'preu' => 289.00, 'estoc' => 0],
    ['nom' => 'Auriculars ANC', 'categoria' => 'audio', 'preu' => 129.00, 'estoc' => 2],
    ['nom' => 'Hub USB-C 7 en 1', 'categoria' => 'accessoris', 'preu' => 34.90, 'estoc' => 20],
    ['nom' => 'Suport per a portatil', 'categoria' => 'accessoris', 'preu' => 24.50, 'estoc' => 0],
];

//ex1

/**
 * preu per unitats de tot
 *
 * @param array $productes
 * @return float
 */
function valorEstoc(array $productes): float {
    $total = 0.0;
    foreach ($productes as $item) {
        $total += $item['preu'] * $item['estoc'];
    }
    return round($total, 2);
}

/**
 * quants tenen l'estoc a 0
 *
 * @param array $productes
 * @return int
 */
function quantsEsgotats(array $productes): int {
    $n = 0;
    foreach ($productes as $item) {
        if ($item['estoc'] === 0) {
            $n++;
        }
    }
    return $n;
}

/**
 * si es buit torno 0 pq no divideixi entre zero
 *
 * @param array $productes
 * @return float
 */
function preuMitja(array $productes): float {
    if (count($productes) === 0) {
        return 0.0;
    }
    $suma = 0.0;
    foreach ($productes as $item) {
        $suma += $item['preu'];
    }
    return round($suma / count($productes), 2);
}

//ex2

/**
 * nomes els que tenen estoc
 *
 * @param array $productes
 * @return array
 */
function nomesDisponibles(array $productes): array {
    $res = [];
    foreach ($productes as $item) {
        if ($item['estoc'] > 0) {
            $res[] = $item;
        }
    }
    return $res;
}

/**
 * em quedo amb el que te el preu mes alt
 *
 * @param array $productes
 * @return array
 */
function elMesCar(array $productes): array {
    $mesCar = $productes[0];
    foreach ($productes as $item) {
        if ($item['preu'] > $mesCar['preu']) {
            $mesCar = $item;
        }
    }
    return $mesCar;
}

/**
 * faig servir les altres funcions per no repetir
 *
 * @param array $productes
 * @return array
 */
function resumCataleg(array $productes): array {
    return [
        'total' => count($productes),
        'disponibles' => count(nomesDisponibles($productes)),
        'mes_car' => elMesCar($productes)['nom'],
    ];
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartat 7</title>
  <link rel="stylesheet" href="estils.css">
</head>
<body>
  <h1>Apartat 7 - Funcions que treballen amb arrays</h1>

  <h2>Exercici 1: tornen un valor</h2>
  <p>Valor de l'estoc: <?= valorEstoc($productes) ?> EUR</p>
  <p>Esgotats: <?= quantsEsgotats($productes) ?></p>
  <p>Preu mitja: <?= preuMitja($productes) ?> EUR</p>
  <p>Preu mitja d'un array buit: <?= preuMitja([]) ?></p>

  <h2>Exercici 2: tornen un array</h2>
  <h3>Disponibles</h3>
  <pre><?php print_r(nomesDisponibles($productes)); ?></pre>

  <h3>El mes car</h3>
  <pre><?php print_r(elMesCar($productes)); ?></pre>

  <h3>Resum</h3>
  <ul>
    <?php foreach (resumCataleg($productes) as $clau => $valor): ?>
      <li><?= $clau ?>: <?= $valor ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
