<?php

class Pessoa {

	public $nome;//Atributo

	public function falar(){//Método

		return "O meu nome é ".$this->nome;

	}

}

$bravo = new Pessoa();
$bravo->nome = "Bravo Azevedo";
echo $bravo->falar();

?>