<?php

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Azevedo',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Bravoow',
	'idade'=>25
));

echo json_encode($pessoas);

?>