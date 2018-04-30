<?php
$string = "Bravoow Tecnologia";

$codificada = sha1($string);

echo "Resultado da codificação usando sha1: " . $codificada;

// Resultado 26a79a8e96a996e07c302f4e9554549e58df231a ;

?>