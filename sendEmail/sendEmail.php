<?php

$dest = "destinatario@email.com"; //Email de destino
$assunto = "Assunto"; //Assunto
$corpo= "Corpo da mensagem. É permitido o uso de HTML."; //Corpo do e-mail
//Cabecalho do email
$headers = "De: Nome email.email@email.com"; //Remetente
$headers .= "X-Mailer: PHP5n";
$headers .= 'MIME-Version: 1.0' . "n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "rn"; //
mail($dest,$assunto,$corpo,$headers);

?>