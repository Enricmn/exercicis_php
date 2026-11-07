<?php
declare(strict_types=1);

//ex1

/**
 * capcalera amb el nom i un subtitol
 *
 * @return void
 */
function capcalera(): void {
    echo '<header><h1>653853861</h1><p>La botiga de material informatic</p></header>';
}

/**
 * peu amb l'any actual
 *
 * @return void
 */
function peu(): void {
    echo '<footer>653853861 - ' . date('Y') . '</footer>';
}

/**
 * aquesta no la crido
 *
 * @return void
 */
function secreta(): void {
    echo '<p>Si surto es que algu m\'ha cridat</p>';
}
//Declara una tercera funció però NO la cridis
//no surt res pq declarar-la no l'executa, nomes fa coses quan la crides
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartat 1</title>
  <link rel="stylesheet" href="estils.css">
</head>
<body>
  <?php capcalera(); ?>

  <h2>Apartat 1 - La primera funcio</h2>

  <?php
  peu();
  peu();
  peu();
  ?>
</body>
</html>
