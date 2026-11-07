<?php
declare(strict_types=1);

//ex1

/**
 * saluda pel nom
 *
 * @param string $nom
 * @return void
 */
function saluda(string $nom): void {
    echo "<p>Benvingut/da a 653853861, $nom!</p>";
}

//ex2

/**
 * fitxa del producte amb el preu ben formatat
 *
 * @param string $nom
 * @param float $preu
 * @param int $estoc
 * @return void
 */
function targeta(string $nom, float $preu, int $estoc): void {
    echo '<div class="targeta">';
    echo "<h3>$nom</h3>";
    echo '<p>' . number_format($preu, 2, ',', '.') . " EUR - $estoc unitats</p>";
    echo '</div>';
}

//ex3

//Crida targeta() canviant l'ordre dels arguments a posta
//targeta(79.90, 'Teclat mecanic', 4);
//peta amb: targeta(): Argument #1 ($nom) must be of type string, float given
//pq van per ordre i el preu cau a $nom, i amb strict_types php no ho converteix
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartat 2</title>
  <link rel="stylesheet" href="estils.css">
</head>
<body>
  <h1>Apartat 2 - Els parametres</h1>

  <h2>Exercici 1: saluda()</h2>
  <?php
  saluda('Pau');
  saluda('Victor');
  saluda('Enric');
  ?>

  <h2>Exercici 2: targeta()</h2>
  <div class="graella">
    <?php
    targeta('Teclat mecanic', 79.90, 4);
    targeta('Ratoli vertical', 29.95, 7);
    targeta('Monitor 27" QHD', 1289.00, 2);
    ?>
  </div>
</body>
</html>
