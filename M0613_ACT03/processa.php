<?php
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
  echo '<p>Has darribar aqui des del formulari. ';
  echo '<a href="registre.html">Torna-hi</a></p>';
  exit;
}else{
$usuari = [
  'nom' => trim($_POST['nom'] ?? ''),
  'cognoms' => trim($_POST['cognoms'] ?? ''),
  'naixement' => trim($_POST['naixement'] ?? ''),
  'telefon' => trim($_POST['telefon'] ?? ''),
  'correu' => trim($_POST['correu'] ?? ''),
  'usuari' => trim($_POST['usuari'] ?? ''),
  'carrer' => trim($_POST['carrer'] ?? ''),
  'poblacio' => trim($_POST['poblacio'] ?? ''),
  'cp' => trim($_POST['cp'] ?? ''),
  'tipus' => trim($_POST['tipus'] ?? ''),
  'origen' => trim($_POST['origen'] ?? ''),
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

if(strlen($usuari['usuari']) < 4){
  $pifies[] = "L'usuari ha de tenir minim 4 lletres";
}

if(strlen($clau) < 6){
  $pifies[] = 'La contrasenya es massa curta (minim 6)';
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
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<title>BitBazar</title>
<!-- Apartat 2 -->
<link rel="stylesheet" href="estils.css">
</head>
<body>

<?php if(count($pifies) > 0): ?>
<h2>No s'ha pogut crear el compte</h2>
<ul>
<?php foreach($pifies as $pifia): ?>
  <li><?= htmlspecialchars($pifia) ?></li>
<?php endforeach; ?>
</ul>
<a href="registre.html">Torna enrere</a>

<?php else: ?>
<h2>Hola <?= htmlspecialchars($usuari['nom']) ?>, compte creat, ja pots anar al mercat!!!!!!!!!!!</h2>
<p>El teu correu es <?= htmlspecialchars($usuari['correu']) ?></p> 

<table>
<tr><th>Camp</th><th>Valor</th></tr>
<?php foreach($usuari as $cosa => $que): ?>
<tr>
  <td><?= htmlspecialchars($cosa) ?></td>
  <td><?= htmlspecialchars($que) ?></td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

</body>
</html>