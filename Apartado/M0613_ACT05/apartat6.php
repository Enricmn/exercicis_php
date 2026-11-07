<?php
declare(strict_types=1);

//ex1

$botiga = '653853861';

/**
 * aquesta no veu $botiga (a posta)
 *
 * @return string
 */
function mostra(): string {
    return 'Som a ' . $botiga;
}
//Warning: Undefined variable $botiga in ...\M0613_ACT05\apartat6.php on line 14

/**
 * la bona, el nom entra per parametre
 *
 * @param string $nom
 * @return string
 */
function mostraBe(string $nom): string {
    return "Som a $nom";
}

//ex2

/**
 * la $n es torna a posar a 0 cada cop
 *
 * @return int
 */
function comptaLocal(): int {
    $n = 0;
    $n++;
    return $n;
}

/**
 * la $n static es recorda entre crides
 *
 * @return int
 */
function comptaStatic(): int {
    static $n = 0;
    $n++;
    return $n;
}

//Explica la diferència entre les dues sortides
//la local sempre dona 1 pq la variable mor quan acaba la funcio
//la static dona 1, 2, 3 pq nomes es crea la primera vegada i guarda el valor
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartat 6</title>
  <link rel="stylesheet" href="estils.css">
</head>
<body>
  <h1>Apartat 6 - L'ambit de les variables</h1>

  <h2>Exercici 1</h2>
  <p>Sense parametre: <?= mostra() ?></p>
  <p>Amb parametre: <?= mostraBe($botiga) ?></p>

  <h2>Exercici 2</h2>
  <p>comptaLocal(): <?= comptaLocal() ?>, <?= comptaLocal() ?>, <?= comptaLocal() ?></p>
  <p>comptaStatic(): <?= comptaStatic() ?>, <?= comptaStatic() ?>, <?= comptaStatic() ?></p>
</body>
</html>
