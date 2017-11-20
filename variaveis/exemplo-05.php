<?php

$nome = "Bravo";

function teste() {

	global $nome;
	echo $nome;

}

function teste2() {

	$nome = "Bravoow";

	echo $nome." agora no teste2";

}

teste();

teste2();

?>