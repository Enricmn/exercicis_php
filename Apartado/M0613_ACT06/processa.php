<?php
require_once 'config.php';
require_once 'funcions.php';
//Prova: dos require 'funcions.php'; seguits
//Fatal error: Cannot redeclare camp() (previously declared in ...\M0613_ACT06\funcions.php:14)
//pq intenta declarar les funcions dos cops, amb require_once la segona vegada no fa res

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

  $titolPagina = 'Acces directe';
  require 'header.php';

  echo '<h2>Aqui no s\'hi arriba directament</h2>';
  echo '<a class="tornar" href="' . PAG_FORMULARI . '">Anar al formulari</a>';

  require 'footer.php';
  exit;
}

$usuari = [
  'nom' => camp('nom'),
  'cognoms' => camp('cognoms'),
  'naixement' => camp('naixement'),
  'telefon' => camp('telefon'),
  'correu' => camp('correu'),
  'usuari' => camp('usuari'),
  'carrer' => camp('carrer'),
  'poblacio' => camp('poblacio'),
  'cp' => camp('cp'),
  'tipus' => camp('tipus'),
  'origen' => camp('origen', 'no ho ha dit'),
  // les caselles no marcades no s'envien, per aixo isset()
  'butlleti' => isset($_POST['butlleti']) ? 'Si' : 'No',
  'condicions' => isset($_POST['condicions']) ? 'Si' : 'No'
];

$clau = $_POST['clau'] ?? '';
$clau2 = $_POST['clau2'] ?? '';

$pifies = [];

if($usuari['nom'] === '') $pifies[] = 'Falta el nom';
if($usuari['cognoms'] === '') $pifies[] = 'Falten els cognoms';

if($usuari['correu'] === ''){
  $pifies[] = 'Falta el correu';
}
elseif(filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL) === false){
  $pifies[] = "El correu no es valid";
}

if(strlen($usuari['usuari']) < MIN_USUARI){
  $pifies[] = "L'usuari ha de tenir minim " . MIN_USUARI . " lletres";
}

if(strlen($clau) < MIN_CLAU){
  $pifies[] = 'La contrasenya es massa curta (minim ' . MIN_CLAU . ')';
}
if($clau !== $clau2){
  $pifies[] = 'Les contrasenyes no son iguals';
}

if($usuari['cp'] != ''){
  if(!preg_match('/^[0-9]{5}$/', $usuari['cp'])) $pifies[] = 'El codi postal han de ser 5 numeros';
}

if($usuari['tipus'] === '') $pifies[] = 'Tria un tipus de client';

if(!isset($_POST['condicions'])){
  $pifies[] = "Has d'acceptar les condicions";
}

// el titol abans del header, si no ja haura escrit el <title>
$titolPagina = count($pifies) > 0
  ? 'No s\'ha creat el compte'
  : 'Compte creat';

require 'header.php';
?>

    <?php if(count($pifies) > 0): ?>
      <h2>No s'ha pogut crear el compte</h2>
      <ul>
      <?php foreach($pifies as $pifia): ?>
        <li><?= htmlspecialchars($pifia) ?></li>
      <?php endforeach; ?>
      </ul>
      <a class="tornar" href="<?= PAG_FORMULARI ?>">Torna enrere</a>

    <?php else: ?>
      <h2>Hola <?= htmlspecialchars($usuari['nom']) ?>, compte creat, ja pots anar al mercat!!!!!!!!!!!</h2>
      <p>El teu correu es <?= htmlspecialchars($usuari['correu']) ?></p>

      <table>
        <tr><th>Camp</th><th>Valor</th></tr>
        <?php foreach($usuari as $clauCamp => $valor): ?>
        <tr>
          <th><?= etiqueta($clauCamp) ?></th>
          <td><?= htmlspecialchars($valor) ?></td>
        </tr>
        <?php endforeach; ?>
      </table>

      <a class="tornar" href="gracies.php">Continuar</a>
    <?php endif; ?>

<?php
require 'footer.php';
