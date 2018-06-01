<?php

$cid = 'BRXX0198'; //ID Yahoo da cidade que deseja exibir o tempo

$dados = unserialize(file_get_contents("link site")); //Recebe os valores do HG Framework

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
?>

<html>
<head>
<style type="text/css">
	* {
	margin:0 0 7 0;
	padding:0;
	list-style:none;
	}
	body{
	font: normal 16px Arial;
	color: #FFF;
	}
	#HGweather{
	background-image: url(link);
	width: 270px;
	height: 79px;
	position: absolute; 
	top: 7px; /* Altere aqui para mudar a posição do tempo */
	left: 7px; /* Altere aqui para mudar a posição do tempo */
	background-repeat: no-repeat;
	}
	#imagem{
	position: relative;
	top: 4px;
	left: 0px;
	}
	#cidade{
	position: relative;
	top: -100px;
	left: 90px;
	}
	#condicao{
	position: relative;
	top: -105px;
	left: 90px;
	}
	#temperatura{
	position: relative;
	top: -105px;
	left: 220px;
	}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="author" content="Bravoow TECNOLOGIA" />
<title>Tempo</title>
</head>
<body>

<div id="Previsão do Tempo">
	<div id="imagem">
		<p><?php echo "<img src='/imagens". $dados[8] .".png' border='0' width='125px' height='90px'>"; ?></p>
	</div>
	<div id="cidade">
		<p><?php echo $dados[7]; ?></p>
	</div>
	<div id="condicao">
		<p><?php echo ucwords($dados[4]); ?></p>
	</div>
	<div id="temperatura">
		<p><?php echo $dados[0] ." ºC"; ?></p>
	</div>
</div>

</body>
</html>