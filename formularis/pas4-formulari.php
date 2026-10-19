<?php
/**
 * Pas 4 - VALIDAE, control d'errors i escapar
 * 
 * 
 */
$nom ='';
$correu = '';
$dia = '';
$errors = [];
$inscrit = false;

//si recibimos los datos

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$nom = trim($_POST['nom'] ?? '');
$correu = trim($_POST['correu'] ?? '');
$dia = trim($_POST['dia'] ?? '');

//Validar los errores
if($nom === ''){
  $errors['nom'] = 'El nom es obligatori';  
  }

if($nom === ''){
  $correu['correu'] = 'El correu es obligatori';  
  }
  elseif(filter_var($correu, FILTER_VALIDATE_EMAIL) === false){
    $errors['correu'] = 'Aquest correu no te un format valid';
  }
  if($dia !== 'divendres' && $dia !== 'dissabte'){
    $errors['dia'] = 'has de triar un dia';
  }

  //si el count del array $errors es 0 --> que no hay errores
  if(count($errors) === 0){
    $inscrit = true;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>inscripcio festival</title>
</head>
<body>
  <h1>Inscripcio Festival</h1>

  <?php if ($inscrit): ?>
  
  <p class="ok">Iscripcio feta, <?= htmlspecialchars($nom) ?></p>
  <p class="ok">T'esperem el <?= htmlspecialchars($dia) ?></p>
  <?php else: ?>

    <!-- novalidate en el form para ver los errores desde php -->
     <form method="post" novalidate>
        <label for="nom">Nom</label>
        <input id="nom" name="nom" value="<?= htmlspecialchars($nom) ?>">
        <?php if(isset($errors['nom'])): ?>
          <p class="error"><?= $errors['nom'] ?></p>
        <?php endif; ?>

        <label for="correu">Correu</label>
        <input id="correu" name="correu" value="<?= htmlspecialchars($correu) ?>">
        <?php if(isset($errors['correu'])): ?>
          <p class="error"><?= $errors['correu'] ?></p>
        <?php endif; ?>

        <label for="dia">Dia</label>
        <select id="dia" name="dia">
          <option value="">Tria un dia</option>
          <option value="divendres"><?= $dia === 'divendres' ? 'selected' : '' ?>Divendres</option>
          <option value="dissabte"><?= $dia === 'disabte' ? 'selected' : '' ?>Dissabte</option>
        </select>

        <?php if(isset($errors['dia'])): ?>
          <p class="error"><?= $errors['dia'] ?></p>
        <?php endif; ?>

        <button>Inscriure'm </button>
        </form>
      <?php endif; ?>

</body>
</html>