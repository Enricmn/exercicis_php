<?php
// concerts
$concerts = [
  ['nom' => 'Los pitiblinders', 'escenari' => 'Gran', 'hora' => '22:30', 'assistents' => 4200, 'preu' => 28.0],
  ['nom' => 'Fnas de influ', 'escenari' => 'Petit', 'hora' => '20:00', 'assistents' => 1850, 'preu' => 18.0],
  ['nom' => 'CastigoLetal', 'escenari' => 'Gran', 'hora' => '00:30', 'assistents' => 3600, 'preu' => 24.0],
  ['nom' => 'AmpeterBy7', 'escenari' => 'Petit', 'hora' => '21:15', 'assistents' => 2100, 'preu' => 20.0],
  ['nom' => 'Tinc caca', 'escenari' => 'Gran', 'hora' => '23:30', 'assistents' => 5100, 'preu' => 32.0],
  ['nom' => 'Mi hermano se compra un coche', 'escenari' => 'Petit', 'hora' => '18:45', 'assistents' => 900, 'preu' => 15.0],
];

// associatiu als dos nivells
$escenaris = [
  'Gran' => [
    'capacitat' => 6000,
    'coberta' => 'no',
    'ubicacio' => 'El garaje del Victor',
  ],
  'Petit' => [
    'capacitat' => 2500,
    'coberta' => 'sí',
    'ubicacio' => 'Casa del Blas',
  ],
];
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartat 4</title>
</head>
<body>
  <h1>Apartat 4 - Arrays multidimensionals</h1>

  <h2>Exercici 1: Les quatre ordenacions</h2>
  <table>
    <tr>
      <th>Nom</th>
      <th>Escenari</th>
      <th>Hora</th>
      <th>Assistents</th>
      <th>Preu</th>
    </tr>
    <?php foreach ($concerts as $concert): ?>
      <tr>
        <td><?= $concert['nom'] ?></td>
        <td><?= $concert['escenari'] ?></td>
        <td><?= $concert['hora'] ?></td>
        <td><?= $concert['assistents'] ?></td>
        <td><?= number_format($concert['preu'], 2, ',') ?> €</td>
      </tr>
    <?php endforeach; ?>
  </table>

  <!-- el tercer es la posicio 2 -->
  <p>Tercer concert: <?= $concerts[2]['nom'] ?></p>

  <h2>Exercici 2: Les quatre ordenacions</h2>
  <p>Capacitat del Gran: <?= $escenaris['Gran']['capacitat'] ?></p>

  <!-- el de fora per cada escenari i el de dins per els camps -->
  <?php foreach ($escenaris as $escenari => $dades): ?>
    <h3><?= $escenari ?></h3>
    <ul>
      <?php foreach ($dades as $camp => $valor): ?>
        <li><?= $camp ?>: <?= $valor ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endforeach; ?>
</body>
</html>
