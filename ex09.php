<?php
/* Funciones preestablecidas en PHP
isset() --> permite saber si una variable existe en nuestro programa

unset() --> liberar espacio en memoria (destruir) de una variable

*/

$var = "10";

if(isset($var)){
  echo "la variable existe";
}

unset($var);

if(isset($var)){
  echo "La variable $var existe";
}else{
  echo "La variable $var no existe";
}

//gettype() --> nos retorna el tipo de variable que pasamos por parametro
//settype() --> asignamos un tipo de dato a la variable que pasamos por parametros
//empty() --> funcion que mira si una variable esta vacia, no existe o su valo es 0
//is_integer(var), is_double(var), is_array(var), is_string(var) --> para saber si una variable es integer, double, string, array, etc

//ex1: for para la tabla de multiplicar del 5
//var existe?

//ex2: mostrar los numeros pares del 1 al 100

//ex3: dibuja una tabla html donde salgan las tablas de multiplicar del 1 al 10
echo"<br>";
$num = 5;
if(isset($num)){
  for ($i = 1; $i <= 10; $i++){
    echo $num * $i;
    echo"<br>";
  }
}
  
echo "<br>";

for( $i = 1; $i <= 1000; $i++){
  if($i % 2 == 0){
    echo "$i, ";
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
      <th>tabla 1</th>
      <th>tabla 2</th>
      <th>tabla 3</th>
      <th>tabla 4</th>
      <th>tabla 5</th>
      <th>tabla 6</th>
      <th>tabla 7</th>
      <th>tabla 8</th>
      <th>tabla 1</th>
      <th>tabla 10</th>
    </tr>
    <?php for($i = 1; $i <= 10; $i++) : ?>
      <tr>
        <?php for($j = 1; $j <= 10; $j++) : ?>
          <td> <?= "$j x $i = " . ($i * $j) ?></td>
          <?php endfor; ?>
      </tr>
    <?php endfor; ?>

  </table>
</body>
</html>