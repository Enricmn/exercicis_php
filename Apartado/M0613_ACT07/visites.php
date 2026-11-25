<?php
// session_start a la primera linea, abans del config sino surt lo de headers already sent
session_start();

require_once 'config.php';

$titolPagina = 'Les teves visites';

// sumo una visita, si no existeix comensa a 0
$_SESSION['visites'] = ($_SESSION['visites'] ?? 0) + 1;

require 'header.php';
?>

    <h2>Les teves visites</h2>

    <div class="ok">
      <p>Has visitat aquesta pàgina <strong><?= $_SESSION['visites'] ?></strong> vegades.</p>
      <p>ID de sessió: <?= session_id() ?></p>
    </div>

    <a class="tornar" href="tanca.php">Tancar la sessió</a>

<?php
require 'footer.php';
