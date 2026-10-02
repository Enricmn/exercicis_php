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
//str_word_count($cadena, $format) --> compta les paraules d'una cadena
//format 0 (per defecte): retorna el numero de paraules
//format 1: retorna un array amb les paraules
//format 2: retorna un array associatiu (posicio => paraula)
$frase = "Hola mundo, esto es PHP";
echo "Numero de paraules: " . str_word_count($frase) . "<br>";
echo "Paraules f1: ";
print_r(str_word_count($frase, 1));
echo "<br>";
echo "Paraules amb posicio f2: ";
print_r(str_word_count($frase, 2));
echo "<br>";

//ex2: Busca en php.net la funcio levenshtein() y pon un ejemplo
//levenshtein($cad1, $cad2) --> retorna la distancia de Levenshtein entre dues cadenes:
//el numero minim de caracters que cal inserir, substituir o eliminar
//per transformar $cad1 en $cad2. Si retorna 0 les cadenes son iguals
echo "Distancia entre 'tu' i 'jo': " . levenshtein("tu", "jo") . "<br>";   // 1 (substituir a per o)
echo "Distancia entre 'sabadell' i 'polinya': " . levenshtein("sabadell", "polinya") . "<br>"; // 1 (inserir s)
echo "Distancia entre 'victor' i 'oscar': " . levenshtein("victor", "oscar") . "<br>"; // 3

//Exemple
$paraula = "manzna";
$diccionari = array("manzana", "naranja", "platano", "pera");
$mes_propera = "";
$distancia_minima = -1;
foreach ($diccionari as $p) {
  $distancia = levenshtein($paraula, $p);
  if ($distancia_minima == -1 || $distancia < $distancia_minima) {
    $distancia_minima = $distancia;
    $mes_propera = $p;
  }
}
echo "Has escrit '$paraula'. Volies dir '$mes_propera'? <br>";

//ex03: Busca que e sun operador ternario y pon un ejemplo
//L'operador ternari es una forma curta d'escriure un if/else en una sola linia:
//  condicio ? valor_si_true : valor_si_false
echo "<h3>ex03: operador ternari</h3>";
$edat = 20;
$resultat = ($edat >= 18) ? "Major d'edat" : "Menor d'edat";
echo "Amb $edat anys: " . $resultat . "<br>";

//Equivalent amb if/else:
if ($edat >= 18) {
  $resultat = "Major d'edat";
} else {
  $resultat = "Menor d'edat";
}

//Operador ternari curt ?: --> si el valor es true el retorna, si no retorna l'altre
$nom = "";
echo "Hola " . ($nom ?: "anonim") . "<br>";

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
//En PHP una funcio nomes pot fer un return d'un sol valor. Per "retornar" varios valors
//es fa una trucada: es posen dins d'un array i es retorna l'array.
//La funcio rep 3 parametres per valor ($v1, $v2, $v3), pero els sobreescriu dins
//de la funcio amb "variable1", "variable2" i "variable3", aixi que els valors que
//li passem no serveixen per res. Com que es pas per valor, les variables originals
//de fora de la funcio NO es modifiquen.
//Al final retorna un array amb els 3 valors. Per recollir-los es pot fer servir
//list() o [] per desempaquetar l'array en 3 variables



//ex05: Crea una funcion comprova_email(..) que reciba una cadena de caracteres como parametro que contine un email y hace la siguientes comprobaciones:
// - convertir a minusculas
// - eliminar todos los espacios en blanco
// - comprovar si tiene el caracter @
// - contar el numero de caracteres
function comprova_email($email){
  //convertir a minuscules
  $email = strtolower($email);

  //eliminar tots els espais en blanc (no nomes els del principi i final com trim)
  $email = str_replace(" ", "", $email);

  echo "Email net: " . $email . "<br>";

  //comprovar si te el caracter @
  //strpos retorna false si no el troba, per aixo cal comparar amb !== (la @ podria estar a la posicio 0)
  if (strpos($email, "@") !== false) {
    echo "L'email conte el caracter @ <br>";
  } else {
    echo "L'email NO conte el caracter @ <br>";
  }

  //comptar el numero de caracters
  echo "Numero de caracters: " . strlen($email) . "<br><br>";

  return $email;
}

comprova_email("  Enric.Marques @ GMAIL.com  ");
comprova_email("Usuari Sense Arroba.com");

?>