<?php
// FUnciones con cadenas de texto (string)

$cadena="hola";
$cadena[0]="c";
echo "Ahora cadena es : " . $cadena . "<br>";

//Funciones preestablecidas
//strlen --> medir longitud de la cadena
$cadena= "Aquesta cadena te moltes lletres";
$num_caracteres = strlen($cadena);
echo "El total de caracters es: " . $num_caracteres . " <br>";

//strpos --> retorna la casella on troba la subacadena dins de la cadena pasada
//Sempre retorna la primera coincidencia
$email = "hola@gmail.com";
echo "Posicio @: " . strpos($email, "@");
echo "<br>";

//strcmp --> compara dos cadenas de texto
//Si retorna 0 es igual
//si retorna <0 la primera cadena es menor que la segunda
//si retorna >0 la primera cadena es mayor que la segunda

$cad1 = "anannefwe";
$cad2 ="pepe";

echo "utilizamos strcmp: " .strcmp($cad1, $cad2);
echo "<br>";


//substr --> retorna una subcadena de caracters d'una cadena a partir d'una posicio 
//especifica fins al final o del tamany especificat
//la cadena original no pateix cap midificacio

$cadena= "PHP és un llenguatge facil";
echo "El substr de 0 a 3 es: " .substr($cadena, 0, 3) . "<br>";
echo "El substr de 21 es: " .substr($cadena, 21) . "<br>";


//trim: --> elimina els espais en blanc al principi i al final de la cadena i saltos de linea
echo "Ejemplo con trim: " .trim("   Hola que tal estas?   ") . "<br>";

//ltrim --> elimina els espais que hi han en blan al principi de la cadena
echo "Ejemplo con ltrim: " .ltrim("   Hola que tal estas        ?   ") . "<br>";

//str_replace($antiga, $nova, $cadena) --> substitueix la cadena antiga per la nova dins de $cadena

$cadena = "PHP es facil";
$antiga = "es facil";
$nova = "no es difícil";

echo "Ejemplo con str_replace: " .str_replace($antiga, $nova, $cadena) . "<br>";

//ereg_replace / eregi_replace() 

//strtolower($cadena): pasa la cadena a minusculas
//strtoupper($cadena): pasa la cadena a mayusculas

//explode: permet dividir una cadena segons uncaracter o patro

//ex1: Busca en php.net la funcio str_word_count() y pon un ejemplo

//ex2: Busca en php.net la funcio levenshtein() y pon un ejemplo

//ex03: Busca que e sun operador ternario y pon un ejemplo

//ex04: Explicar que hace esta funcion:
/* 
function funcioMultipleReturns($v1, $v2, $v3){
  $v1 = "variable1";
  $v2 = "variable2";
  $v3 = "variable3";
  
  return array($v1, $v2, $v3);
}

*/

//ex05: Crea una funcion comprova_email(..) que reciba una cadena de caracteres como parametro que contine un email y hace la siguientes comprobaciones:
// - convertir a minusculas
// - eliminar todos los espacios en blanco
// - comprovar si tiene el caracter @
// - contar el numero de caracteres

?>