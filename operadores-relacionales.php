<?php


$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;
// == igual (se utiliza para hacer una igualdad) 
var_dump($a == $b);

var_dump($a == $b2); 
echo "<br>";

// === IDENTICO si camprara datos 
 
var_dump($a === $b2);

// != Diferente  solo valores
echo "<br>";
var_dump($a != $b2);
// !== Compara pero si comprara tipos de datos
echo "<br>";
 var_dump($a !== $b);
 var_dump($a !== $b2);
 
// <MENOR QUE
echo "<br>";
var_dump($a < $b); 
var_dump($c < $b); 
var_dump($d < $b); 


// MAYOR QUE  >
echo "<br>";
var_dump($a > $b); 
var_dump($c > $b); 
var_dump($d > $b); 

//MAYOR O IGUAL QUE >
echo "<br>";
var_dump($a >= $b); 
var_dump($c >= $b); 
var_dump($d >= $b); 

//MENOR O IGUAL QUE >
echo "<br>";
var_dump($a <= $b); 
var_dump($c <= $b); 
var_dump($d <= $b); 
// NAVE ESPACIAL <=>
echo "<br>";
echo 2 <=> 1; 
echo "<br>";
echo 1 <=> 1; 
echo "<br>";
echo -51 <=> 1; 
// FUNCION NULL 
echo "<br>";
$edad = 23;
echo $edad2 ?? $edad;
?>






