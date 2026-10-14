<?php
$grups = ['Alejandra posam un 10 porfa', 'Em comprare un cotxe', 'Enviem un correo', 'Si ho has llegit', 'Sino ets un fecas'];

// cosa => descripcio
$estils = [
  'Subnormal' => 'Botiga barata',
  'Guilipolles' => 'Suspes en tot',
  'Imbecil' => '5040 i adeu',
  'Pishapins' => 'Corre que et pillen',
  'Caracul' => 'Asesi nivell 7',
];

// el mateix pero començant pel final
function recorrerInvers(array $llista){
  end($llista);
  do {
    $grup = key($llista);
    $estil = current($llista);
    echo "<li>$grup: $estil</li>";
  } while (prev($llista));
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apartat 2</title>
</head>
<body>
  <h1>Apartat 2 - Recorrer arrays</h1>

  <h2>Exercici 1: Foreach bàsic</h2>
  <ul>
    <?php foreach ($grups as $grup): ?>
      <li><?= $grup ?></li>
    <?php endforeach; ?>
  </ul>

  <!-- ara amb la posicio -->
  <ul>
    <?php foreach ($grups as $pos => $grup): ?>
      <li><?= $pos ?> - <?= $grup ?></li>
    <?php endforeach; ?>
  </ul>

  <h2>Exercici 2: Foreach sobre un associatiu</h2>
  <table>
    <tr>
      <th>Grup</th>
      <th>Estil</th>
    </tr>
    <?php foreach ($estils as $grup => $estil): ?>
      <tr>
        <td><?= $grup ?></td>
        <td><?= $estil ?></td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <th>Total</th>
      <th><?= count($estils) ?></th>
    </tr>
  </table>

  <h2>Exercici 3: El mateix sense foreach</h2>
  <table>
    <tr>
      <th>Grup</th>
      <th>Estil</th>
    </tr>
    <?php
    // amb el punter, do-while pq la primera s'ha de llegir abans de fer el next
    reset($estils);
    do {
      $grup = key($estils);
      $estil = current($estils);
      echo "<tr><td>$grup</td><td>$estil</td></tr>";
    } while (next($estils));
    ?>
    <tr>
      <th>Total</th>
      <th><?= count($estils) ?></th>
    </tr>
  </table>
  <?php
  /*explicacio Escriu en un comentari quina de les dues maneres et sembla més clara i per què */
  // el foreach es mes clar, en una linia ja tens clau i valor
  // amb el punter has d'anar amb compte de fer el reset i el next
  ?>

  <h2>Exercici 4: A l'inrevés, dins d'una funció</h2>
  <ul>
    <?php recorrerInvers($estils); ?>
  </ul>

  <!-- l'original segueix igual pq a la funcio li passem una copia -->
  <ul>
    <?php foreach ($estils as $grup => $estil): ?>
      <li><?= $grup ?>: <?= $estil ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
