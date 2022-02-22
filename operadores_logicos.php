<?php

$dato1 = true;
$dato2 = true;
$dato3 = false;
$dato4 = false;

//AND
var_dump($dato1 && $dato2); 
// OR 
var_dump($dato4 || $dato3);
// NOT
var_dump(!$dato1);

//experimento
$resultado = $dato1 and $dato2;
var_dump($resultado );

//RETO

$DT1 = true;
$DT2 = true;
$DF1 = false;
$DF2 = false;

var_dump ($DT1 && $DT2);

var_dump($DT1 || $DF1);

var_dump($DF1 || $DF2);

var_dump(!$DT1);

var_dump(!$DT2 || $DT1);
