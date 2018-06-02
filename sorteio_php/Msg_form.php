<?
$assunto = $_POST['titulo'];
$autor = $_POST['autor'];
$email2 = $_POST['email2'];
$formatacao = $_POST['formatacao'];
$msg = $_POST['msg'];

include "config.php";
$sql7 = mysql_query("SELECT * FROM $tb2 where nome='$autor'");
while ($reg9 = mysql_fetch_array($sql7)){
$email_admin = $reg9['email_admin'];
if ($formatacao==html){
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $email_admin<$autor>";
global $assunto, $msg, $headers, $email2;
@mail("$email2","$assunto","$msg","$headers");
echo "Sua Mensagem foi enviada com sucesso.";
}
if ($formatacao==texto) {
$headers = "From: $email_admin<$autor>";
@mail("$email2","$assunto","$msg","$headers");
echo "Sua Mensagem foi enviada com sucesso.";
}
}
?>
