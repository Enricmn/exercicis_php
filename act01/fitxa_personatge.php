<?php
// Conts
const JOC = 'Victor eres mi hijo';
const VIDA_MAX = 200;
const XP_PER_NIVELL = 1000;
const FORCA_MAX = 150;
const LLINDAR_FERIT = 30; // per sota d'aquest % de vida significara que esta farit

// variebles
$nom = 'Fans del Influ';
$classe = 'Asesi';
$nivell = 7;
$vida = 130;
$forca = 95;
$experiencia = 640;
$atacBase = 12;

// tots els calculs
$percentatgeVida = round($vida / VIDA_MAX * 100, 1);
$percentatgeForca = round($forca / FORCA_MAX * 100, 1);
$xpFalta = XP_PER_NIVELL - $experiencia;
$poderAtac = $atacBase * $nivell;        // creix amb el nivell
$ferit = $percentatgeVida < LLINDAR_FERIT; // true o false
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <title>Fitxa de personatge</title>
  <link rel="stylesheet" href="style.css"> 
</head>
<body>
  <h1><?= JOC ?></h1>

  <?php
  echo "<h2>Fitxa de $nom</h2>";
  echo '<p>Classe: ' . $classe . ' - Nivell ' . $nivell . '</p>';
  ?>

  <!-- Barra de vida-->
  <p>Vida: <?= $vida ?> / <?= VIDA_MAX ?> (<?= $percentatgeVida ?>%)</p>
  <div class="barra"><span class="vida" style="width: <?= $percentatgeVida ?>%"></span></div>

  <!-- Barra de força -->
  <p>Força: <?= $forca ?> / <?= FORCA_MAX ?> (<?= $percentatgeForca ?>%)</p>
  <div class="barra"><span class="mana" style="width: <?= $percentatgeForca ?>%"></span></div>

  <!-- Resta de dades -->
  <p>Experiència: <?= $experiencia ?> (li falten <?= $xpFalta ?> per pujar de nivell)</p>
  <p>Poder d'atac: <?= $poderAtac ?></p>
  <p>Ferit: <?php var_dump($ferit); ?></p>
</body>
</html>