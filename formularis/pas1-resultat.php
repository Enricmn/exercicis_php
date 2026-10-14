<?php
/**
 * PHPDoc:
 * Pas 1: Les dades arriben per GET
 * Mirar la url si van les addes
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultat pas 1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Què ha arribat al servidor</h1>

  <main class="targeta">
    <h2>$_GET</h2>
    <pre><?php print_r($_GET); ?></pre>

    <h2>$_POST</h2>
    <pre><?php print_r($_POST); ?></pre>

    <a class="boto" href="pas1-formulari.html">Tornar</a>
  </main>
  
</body>
</html>