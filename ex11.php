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
//str_word_count --> compta les paraules d'una cadena
$frase = "Hola mundo esto es PHP";
echo "Numero de paraules: " . str_word_count($frase) . "<br>";

//ex2: Busca en php.net la funcio levenshtein() y pon un ejemplo
//levenshtein --> diu quantes lletres cal canviar per passar d'una paraula a l'altra
//Si retorna 0 les paraules son iguals
echo "Distancia entre 'tu' i 'jo': " . levenshtein("tu", "jo") . "<br>";

//ex03: Busca que es un operador ternario y pon un ejemplo
//Es un if/else en una sola linia: condicio ? si_true : si_false
$edat = 20;
$resultat = ($edat >= 18) ? "Major d'edat" : "Menor d'edat";
echo $resultat . "<br>";

//ex04: Explicar que hace esta funcion:
/* 
function funcioMultipleReturns($v1, $v2, $v3){
  $v1 = "variable1";
  $v2 = "variable2";
  $v3 = "variable3";
  
  return array($v1, $v2, $v3);
}
*/
//Explicacio:
//Una funcio nomes pot retornar un valor.
//Per retornar 3 valors els posa dins d'un array i retorna l'array.
//Els valors que li passem no serveixen, perque dins la funcio es canvien.


//ex05: Crea una funcion comprova_email(..) que reciba una cadena de caracteres como parametro que contine un email y hace la siguientes comprobaciones:
// - convertir a minusculas
// - eliminar todos los espacios en blanco
// - comprovar si tiene el caracter @
// - contar el numero de caracteres
function comprova_email($email){
  //minuscules
  $email = strtolower($email);

  //treure espais
  $email = trim($email);

  echo "Email: " . $email . "<br>";

  //comprovar @
  if (strpos($email, "@") !== false) {
    echo "Te @ <br>";
  } else {
    echo "No te @ <br>";
  }

  //numero de caracters
  echo "Caracters: " . strlen($email) . "<br>";
}

comprova_email("  Enric@GMAIL.com  ");

?>