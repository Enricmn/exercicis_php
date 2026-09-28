<?php
//Crear array asociativo con: normbre, curso, edat, nota_media
//10 alumnos
//mostrar en tabla html

$alumnos = [
  ['Nombre' => 'Victor', 'curso' => 'DAW', 'edat' => 67, 'nota_media' => 1],
  ['Nombre' => 'Borja', 'curso' => 'DAW', 'edat' => 23, 'nota_media' => 3],
  ['Nombre' => 'Pau', 'curso' => 'DAW', 'edat' => 34, 'nota_media' => 4],
  ['Nombre' => 'Oscar', 'curso' => 'DAW', 'edat' => 12, 'nota_media' => 7],
  ['Nombre' => 'Carlos', 'curso' => 'DAW', 'edat' => 54, 'nota_media' => 8],
  ['Nombre' => 'Folch', 'curso' => 'DAW', 'edat' => 75, 'nota_media' => 4],
  ['Nombre' => 'Oriol', 'curso' => 'DAW', 'edat' => 75, 'nota_media' => 5],
  ['Nombre' => 'Alex', 'curso' => 'DAW', 'edat' => 34, 'nota_media' => 3],
  ['Nombre' => 'Arnau', 'curso' => 'DAW', 'edat' => 54, 'nota_media' => 6],
  ['Nombre' => 'Blas', 'curso' => 'DAW', 'edat' => 55, 'nota_media' => 3],
];

//count para contar alumnos
echo  "El numero de alumnes es:". count($alumnos);
echo "<br>";

foreach($alumnos as $a) {
  if (in_array("Victor", $a)) {
    echo "Si esta victor";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table>
    <tr>
      <th>Nombre</th>
      <th>Curso</th>
      <th>Edat</th>
      <th>Nota</th>
    </tr>
    <?php foreach($alumnos as $a) : ?>
      <tr>
        <td>El nombre es:<?= $a['Nombre']?></td>
        <td>El curso es:<?= $a['curso']?></td>
        <td>La edat es:<?= $a['edat']?></td>
        <td>La nota media es:<?= $a['nota_media']?></td>
      </tr>
    <?php endforeach; ?>

  </table>
  
</body>
</html>