<?php
/**
 * PAS 3 una sola pàgina
 * fins ara teniem dos fitxers, el formulari i el resultat
 * Mira com es fa la peticio i aixi fara una cosa o altre
 * La primmera visita es amb get i quan es prem el boto d'enviar es amb  POST
 */

$nom ='';
$correu = '';
$dia = '';

//var de control
$enviat = false;

//array predefinido $_SERVER nos da informacion del servidor
/*
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
*/

//Si el request mothod es POST es que ya se ha clicado el boton de enviar del formulario con el method=post
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $nom = trim($_POST['nom'] ?? '' );
  $correu = trim($_POST['correu'] ?? '');
  $dia = trim($_POST['dia'] ?? 'sense triar');
  $enviat = true;
  $correu2 = trim($_POST['correu2'] ??'');
  $carrer = trim($_POST['carrer'] ??'');
  $telefono = trim($_POST['telefon'] ??'');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscripcio al Festival</title>
  <link rel="stylesheet" href="style.css?v=<?= filemtime('style.css') ?>">
</head>
<body>
  <h1>Inscripcio al festival</h1>

  <?php if($enviat): ?>
    <p> Inscripcio rebuda: <?= htmlspecialchars($nom) ?> - <?= htmlspecialchars($dia) ?> 
        - <?= htmlspecialchars($telefono) ?> - <?= htmlspecialchars($carrer) ?> 
       
    </p>

  <?php endif; ?>

  <form method="post">
      <label for="name">nom</label>
      <input id="nom" name="nom">

      <label for="correu">Correu</label>
      <input is="correu" name="correu" type="email">

      <label for="correu2">Repeteix el correo</label>
      <input is="correu2" name="correu2" type="email">

      <label for="carrer">Carrer</label>
      <input is="carrer" name="carrer" type="text">

      <label for="telefon">Telefon</label>
      <input is="telefon" name="telefon" type="tel">


      <label for="dia">Dia</label>
      <select id="dia" name="dia">
        <option value="divendres">Divendres</option>
        <option value="dissabte">Dissabte</option>
      </select>

      <button type="submit">Inscriure</button>
    </form>

</body>
</html>
