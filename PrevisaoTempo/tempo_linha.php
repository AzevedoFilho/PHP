<?php

$cid = 'BRXX0198'; //ID Yahoo da cidade que deseja exibir o tempo

$dados = unserialize(file_get_contents("link site")); //Puxa os valores do HG Framework

/*
   |------------------|
### Bravoow TECNOLOGIA ###
   |------------------|

Vari�veis:
	$dados[0] => Temperatura em graus Celsius
	$dados[1] => Data do servidor dd/mm/aaaa
	$dados[2] => Hor�rio do servidor hh:mm
	$dados[3] => C�digo de condi��o clim�tica
	$dados[4] => Descri��o da condi��o clim�tica
	$dados[5] => Informa se � dia ou noite por extenso(dia/noite)
	$dados[6] => C�digo da cidade informado
	$dados[7] => Nome da cidade de referencia
	$dados[8] => C�digo da imagem � ser exibida

		Vers�o 1.0.2009
		
*/

echo "<pre>";
print_r($dados);