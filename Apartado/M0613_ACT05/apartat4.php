<?php
declare(strict_types=1);

//ex1

/**
 * si no li passo l'iva fa servir el 21%
 *
 * @param float $base
 * @param float $iva
 * @return float
 */
function preuAmbIva(float $base, float $iva = 0.21): float {
    return round($base * (1 + $iva), 2);
}

//ex2

/**
 * per defecte un 10% de descompte
 *
 * @param float $preu
 * @param int $percentatge
 * @return float
 */
function aplicaDescompte(float $preu, int $percentatge = 10): float {
    return round($preu * (1 - $percentatge / 100), 2);
}

//ex3

/**
 * si no dius res diu Hola
 *
 * @param string $nom
 * @param string $salutacio
 * @return string
 */
function benvinguda(string $nom, string $salutacio = 'Hola'): string {
    return "$salutacio, $nom!";
}

//Prova de posar el paràmetre opcional el primer
//Deprecated: Optional parameter $salutacio declared before required parameter $nom
//is implicitly treated as a required parameter
//o sigui que el valor per defecte no serveix de res, els opcionals sempre al final
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartat 4</title>
  <link rel="stylesheet" href="estils.css">
</head>
<body>
  <h1>Apartat 4 - Valors per defecte</h1>

  <h2>Exercici 1: preuAmbIva()</h2>
  <p>Per defecte: <?= preuAmbIva(100) ?></p>
  <p>Amb 0.10: <?= preuAmbIva(100, 0.10) ?></p>
  <p>Amb 0.04: <?= preuAmbIva(100, 0.04) ?></p>

  <h2>Exercici 2: aplicaDescompte()</h2>
  <p>Per defecte: <?= aplicaDescompte(80) ?></p>
  <p>Amb un 25%: <?= aplicaDescompte(80, 25) ?></p>

  <h2>Exercici 3: benvinguda()</h2>
  <p><?= benvinguda('Pau') ?></p>
  <p><?= benvinguda('Aina', 'Bon dia') ?></p>
</body>
</html>
