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

/**
 * suma el preu amb iva dels productes, l'iva es opcional
 *
 * @param array $productes
 * @param float $iva
 * @return float
 */
function preuAmbIva(array $productes, float $iva = 0.21): float {
    $preuIva = 0;
    foreach ($productes as $item) {
        $preuIva += $item['preu'] * (1 + $iva); // aplica el iva
    }
    return round($preuIva, 2);
}

/**
 * preu en estil catala
 *
 * @param float $preu
 * @return string
 */
function formatPreu(float $preu): string {
    return number_format($preu, 2, ',', '.') . ' EUR'; // 1.234,50 EUR
}

/**
 * esgotat, ultimes unitats o disponible
 *
 * @param int $estoc
 * @return string
 */
function estatEstoc(int $estoc): string {
    if ($estoc === 0) {
        return 'Esgotat';
    } elseif ($estoc <= 3) {
        return 'Últimes unitats';
    }
    return 'Disponible';
}

/**
 * els productes d'una categoria, amb 'totes' el cataleg sencer
 *
 * @param array $productes
 * @param string $categoria
 * @return array
 */
function filtraCategoria(array $productes, string $categoria): array {
    if ($categoria === 'totes') {
        return $productes; // el cataleg sencer
    }
    $res = [];
    foreach ($productes as $item) {
        if ($item['categoria'] === $categoria) {
            $res[] = $item;
        }
    }
    return $res;
}

/**
 * total, disponibles, esgotats i valor de l'estoc
 *
 * @param array $productes
 * @return array
 */
function resumCataleg(array $productes): array {
    $disponibles = 0;
    $esgotats = 0;
    $valor = 0;
    foreach ($productes as $item) {
        if ($item['estoc'] === 0) {
            $esgotats++;
        } else {
            $disponibles++;
        }
        $valor += $item['preu'] * $item['estoc']; // preu per unitats
    }
    return [
        'total' => count($productes),
        'disponibles' => $disponibles,
        'esgotats' => $esgotats,
        'valor estoc' => formatPreu($valor),
    ];
}

/**
 * pinta la targeta d'un producte
 *
 * @param array $producte
 * @return void
 */
function pintaTargeta(array $producte): void {
    echo '<div class="targeta">';
    echo '<h3>' . $producte['nom'] . '</h3>';
    echo '<p>Sense IVA: ' . formatPreu($producte['preu']) . '</p>';
    echo '<p>Amb IVA: ' . formatPreu(preuAmbIva([$producte])) . '</p>'; // li passo un array amb un sol producte
    echo '<p>' . estatEstoc($producte['estoc']) . '</p>';
    echo '</div>';
}

/**
 * pinta una targeta per cada producte o un missatge si no hi ha res
 *
 * @param array $productes
 * @return void
 */
function pintaGraella(array $productes): void {
    if (count($productes) === 0) {
        echo '<p class="avis">No hi ha cap producte en aquesta categoria</p>';
        return;
    }
    echo '<div class="graella">';
    foreach ($productes as $item) {
        pintaTargeta($item);
    }
    echo '</div>';
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Repte</title>
  <link rel="stylesheet" href="estils.css">
</head>
<body>
  <h1>Repte final - El cataleg de 653853861</h1>

  <h2>Resum del cataleg</h2>
  <ul>
    <?php foreach (resumCataleg($productes) as $clau => $valor): ?>
      <li><?= $clau ?>: <?= $valor ?></li>
    <?php endforeach; ?>
  </ul>
  <p>Total amb IVA: <?= formatPreu(preuAmbIva($productes)) ?></p>

  <h2>Tots els productes</h2>
  <?php pintaGraella(filtraCategoria($productes, 'totes')); ?>

  <h2>Accessoris</h2>
  <?php pintaGraella(filtraCategoria($productes, 'accessoris')); ?>

  <h2>Impressores</h2>
  <?php pintaGraella(filtraCategoria($productes, 'impressores')); ?>
</body>
</html>
