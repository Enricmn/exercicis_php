<?php
//Crear array asociativo con: normbre, curso, edat, nota_media
//10 alumnos
//mostrar en tabla html

$alumnos = [
  ['nombre' => 'Victor', 'curso' => 'DAW', 'edat' => 67, 'nota_media' => 1],
  ['nombre' => 'Borja', 'curso' => 'DAW', 'edat' => 23, 'nota_media' => 3],
  ['nombre' => 'Pau', 'curso' => 'DAW', 'edat' => 34, 'nota_media' => 4],
  ['nombre' => 'Oscar', 'curso' => 'DAW', 'edat' => 12, 'nota_media' => 7],
  ['nombre' => 'Carlos', 'curso' => 'DAW', 'edat' => 54, 'nota_media' => 8],
  ['nombre' => 'Folch', 'curso' => 'DAW', 'edat' => 75, 'nota_media' => 4],
  ['nombre' => 'Oriol', 'curso' => 'DAW', 'edat' => 75, 'nota_media' => 5],
  ['nombre' => 'Alex', 'curso' => 'DAW', 'edat' => 34, 'nota_media' => 3],
  ['nombre' => 'Arnau', 'curso' => 'DAW', 'edat' => 54, 'nota_media' => 6],
  ['nombre' => 'Blas', 'curso' => 'DAW', 'edat' => 55, 'nota_media' => 3],
];

// count — Cuenta todos los elementos de un array o en un objeto Countable
echo '<p>Estudiantes: ' . count($alumnos) . '</p>';

// in_array — Indica si un valor pertenece a un array
$buscar = 'Pau';

// Recorro cada fila del array para que sea indexado y no asociativo
foreach ($alumnos as $a) {
  if (in_array($buscar, $a, true)) {
    echo "<p>$buscar existe</p>";
    break;
  }
}

// array_key_exists — Verifica si una clave existe en un array
$columna = 'edat';

if (array_key_exists($columna, $alumnos[0])) {
  echo "<p>La columna $columna existe en el array 'estudiantes'</p>";
}

// sort — Ordena un array en orden creciente
/*
  He creado una array indexado porque sino, al ordenar una
  fila del array asociativo, luego da error al crear la
  tabla
*/

$frutas = ["Pau", "Medina", "Vazquez"];
sort($frutas);
foreach ($frutas as $f) {
  echo $f . " ";
}

echo "<br>";

// rsort — Ordena un array en orden decreciente
rsort($frutas);
foreach ($frutas as $f) {
  echo $f . " ";
}

echo "<br>";

// ksort — Ordena un array según las claves en orden ascendente
$alumno = $alumnos[1];
ksort($alumno);
foreach ($alumno as $key => $val) {
  echo "$key -> $val, ";
}

echo "<br>";

// array_sum — Calcula la suma de los valores del array
$numeros = [2, 3, 1, 5];
echo 'Suma -> ' . array_sum($numeros);

echo "<br>";

// max — El valor más grande
echo 'Máximo -> ' . max($numeros);

echo "<br>";

// min — El valor más pequeño
echo 'Mínimo -> ' . min($numeros);

echo '<br>';

// array_column — Devuelve los valores de una columna de un array de entrada
$nombres = array_column($alumnos, 'nombre');
print_r($nombres);

echo '<br>';

// implode — Une elementos de un array en un string
echo implode(", ", $frutas);

echo '<br>';

// explode — Divide una string en segmentos
$datos = implode(",", $alumnos[1]);
$datos_separados = explode(",", $datos);
foreach ($datos_separados as $d) {
  echo $d . "<br>";
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