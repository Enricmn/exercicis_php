<?php
session_start(); // a TOTES les pagines que fan servir la sessio

require_once 'config.php';
require_once 'funcions.php';

// el porter: abans eren aquestes 4 linies, ara estan a funcions.php (ampliacio)
// if (!isset($_SESSION['usuari'])) {
//     header('Location: login.php');
//     exit;
// }
nomesAmbSessio();

$titolPagina = 'La teva àrea privada';
require 'header.php';
?>

    <h2><?= salutSegonsHora() ?>, <?= htmlspecialchars($_SESSION['nom']) ?></h2>

    <p>Has entrat a les
       <strong><?= htmlspecialchars($_SESSION['entrada']) ?></strong>.</p>

    <!-- taula amb tot el que hi ha dins de $_SESSION -->
    <table>
      <?php foreach ($_SESSION as $clau => $valor): ?>
        <tr>
          <th><?= htmlspecialchars($clau) ?></th>
          <td><?= htmlspecialchars((string) $valor) ?></td>
        </tr>
      <?php endforeach; ?>
    </table>

    <p><a href="perfil.php">Veure el meu perfil</a></p>

    <a class="tornar" href="sortir.php">Tancar la sessió</a>

<?php
require 'footer.php';
