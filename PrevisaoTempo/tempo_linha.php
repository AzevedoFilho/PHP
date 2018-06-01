<?php

$cid = 'BRXX0198'; //ID Yahoo da cidade que deseja exibir o tempo

$dados = unserialize(file_get_contents("link site")); //Puxa os valores do HG Framework

/*
   |------------------|
### Bravoow TECNOLOGIA ###
   |------------------|

Variáveis:
	$dados[0] => Temperatura em graus Celsius
	$dados[1] => Data do servidor dd/mm/aaaa
	$dados[2] => Horário do servidor hh:mm
	$dados[3] => Código de condição climática
	$dados[4] => Descrição da condição climática
	$dados[5] => Informa se é dia ou noite por extenso(dia/noite)
	$dados[6] => Código da cidade informado
	$dados[7] => Nome da cidade de referencia
	$dados[8] => Código da imagem à ser exibida

		Versão 1.0.2009
		
*/

echo "<pre>";
print_r($dados);