<?php
// segona pagina privada (ampliacio) per veure que el porter es repeteix
// per aixo he mogut el "porter" a una funcio de funcions.php
session_start();

require_once 'config.php';
require_once 'funcions.php';

nomesAmbSessio();

$titolPagina = 'El meu perfil';
require 'header.php';

// agafo les dades de l'usuari de la llista de config.php
$usuariActual = $_SESSION['usuari'];
?>

    <h2>El meu perfil</h2>

    <table>
      <tr><th>Nom d'usuari</th><td><?= htmlspecialchars($usuariActual) ?></td></tr>
      <tr><th>Nom</th><td><?= htmlspecialchars(USUARIS[$usuariActual]['nom']) ?></td></tr>
      <tr><th>Hora d'entrada</th><td><?= htmlspecialchars($_SESSION['entrada']) ?></td></tr>
    </table>

    <p><a href="<?= PAG_PRIVADA ?>">Tornar a l'àrea privada</a></p>

<?php
require 'footer.php';
