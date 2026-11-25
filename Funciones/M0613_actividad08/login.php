<?php
//pq treballarem amb sessions
//session_start() SEMPRE la primera linia, si no -> headers already sent
session_start();

//diferencies entre require i require_once
//require_once() -> evita que es carreguin mes d'una vegada
//require() -> es carreguen cada vegada i pot donar error (Cannot redeclare)

//require_once() -> per als fitxers de configuracio i funcions

require_once 'config.php';
require_once 'funcions.php';

// si ja ha entrat no te sentit tornar a fer login, cap a la privada
if (isset($_SESSION['usuari'])) {
  header('Location: ' . PAG_PRIVADA);
  exit;
}

$errors = [];

// comptador d'intents fallits guardat a la sessio (com el de visites de l'act 7)
// si no existeix encara val 0
$intents = $_SESSION['intents'] ?? 0;
$bloquejat = $intents >= MAX_INTENTS;

//si han clicat el boto
if($_SERVER['REQUEST_METHOD'] === 'POST') {

  $usuari = camp('usuari');
  $clau   = $_POST['clau'] ?? ''; // la clau sense trim, els espais poden ser part de la contrasenya

  if ($bloquejat) {
    // ni ho provo, ja ha fallat massa
    $errors[] = 'Has fallat ' . MAX_INTENTS . ' vegades. Accés bloquejat.';
  } else {

    $dades = comprovaCredencials($usuari, $clau);

    if ($dades === null) {
      // UN sol missatge a posta, no dir si falla l'usuari o la clau
      // si no, regales informacio de quins usuaris existeixen
      $errors[] = 'Usuari o contrasenya incorrectes.';

      $_SESSION['intents'] = $intents + 1;
      $bloquejat = $_SESSION['intents'] >= MAX_INTENTS;

      if ($bloquejat) {
        $errors[] = 'Has gastat tots els intents. Accés bloquejat.';
      } else {
        $queden = MAX_INTENTS - $_SESSION['intents'];
        $errors[] = 'Et queden ' . $queden . ($queden === 1 ? ' intent.' : ' intents.');
      }
    } else {
      // numero de sessio nou, si algu tenia l'antic ja no li serveix
      // aixo evita el robatori de sessio (session fixation)
      session_regenerate_id(true);

      unset($_SESSION['intents']); // ha entrat be, reinicio el comptador

      $_SESSION['usuari']  = $usuari;
      $_SESSION['nom']     = $dades['nom'];
      $_SESSION['entrada'] = date('H:i:s');

      // si venia d'una pagina privada el torno alla, si no a privat.php
      $desti = $_SESSION['tornar_a'] ?? PAG_PRIVADA;
      unset($_SESSION['tornar_a']);

      header('Location: ' . $desti);
      exit;
    }
  }
}

$titolPagina = 'Iniciar sessió';
require 'header.php';
?>

    <h2>Entra al teu compte</h2>

    <?php if (count($errors) > 0): ?>
      <div class="errors">
        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

    <?php if ($bloquejat): ?>
      <!-- si esta bloquejat no ensenyo el formulari -->
      <p>Has superat el màxim d'intents. Tanca el navegador i torna-ho a provar més tard.</p>
    <?php else: ?>
      <!-- el formulari s'envia a si mateix (action = login.php) -->
      <form action="<?= PAG_LOGIN ?>" method="post">
        <label for="usuari">Nom d'usuari</label>
        <!-- torno a posar l'usuari si s'ha equivocat, la clau NO -->
        <input type="text" id="usuari" name="usuari" value="<?= htmlspecialchars($usuari ?? '') ?>">

        <label for="clau">Contrasenya</label>
        <input type="password" id="clau" name="clau">

        <button type="submit">Entrar</button>
      </form>
    <?php endif; ?>

<?php
require 'footer.php';
