<?php
/* Definicion de una funcion

function nomFuncion($arg1, $arg2){
  //codigo de la funcion
  //return valo o no;
}
*/

function funcionTest(){
  $var = 10;
  return $var;
}

//como la funcionTest tiene un return, tengo que 
// igualarla a una variable para recoger el valor del retur

$var_fun = funcionTest();
echo "La variable igualada a la funcion vale: " . $var_fun;

echo"<br>";

//Funcion sin return
function funcionTestSin(){
  //Esta variable es local de la funcion
  $var = 20;
  echo "La variable igualada a la funcion vale: " . $var;
}

funcionTestSin();
echo"<br>";
//Como podemos usar dentro de las funciones variables globales
$var2 = 50;
function funcionConGlobal(){
  // Para poder utilizar una variable de fuera del ambito de la funcion se usa la palabra reservada global
  global $var2;
  echo "La variable var2 de fuera de la funcion vale: $var2";
}
funcionConGlobal();
echo "<br>";

//Recursividad --> una funcion que puede llamarse a si misma
function factorial($numero){
  if($numero == 1){
    return $numero;
  }else{
    return $numero * factorial($numero - 1);
  }
}
echo"El factorial de 7 es: " . factorial(7) . "<br>";
?>