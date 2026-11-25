<?php
// Si una pàgina s'oblida del títol, no volem un avís a la pantalla.
if (!isset($titolPagina)) {
    $titolPagina = 'Inici';
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars($titolPagina) ?> · <?= BOTIGA_NOM ?></title>
  <link rel="stylesheet" href="<?= FULL_ESTILS ?>">
</head>
<body>

  <header>
    <h1><?= BOTIGA_NOM ?></h1>
    <p><?= BOTIGA_LEMA ?></p>
    <img src="<?= FOTO_BOTIGA ?>" alt="<?= BOTIGA_NOM ?>">

    <!-- salut a la capçalera: mira la sessio directament, sense funcions.php -->
    <!-- pq registre.php no inclou funcions.php i petaria -->
    <!-- isset() tambe evita l'avis si la pagina no ha fet session_start() -->
    <p class="usuari">
    <?php if (isset($_SESSION['usuari'])): ?>
      Hola, <strong><?= htmlspecialchars($_SESSION['nom']) ?></strong>
      &middot; <a href="sortir.php">Sortir</a>
    <?php else: ?>
      <a href="login.php">Iniciar sessió</a>
    <?php endif; ?>
    </p>
  </header>

  <main>
