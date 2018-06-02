<?
include "cabecalho.php";
include "valida_cookies.php";
//echo "<BR><font face=\"verdana\" size=\"1\"><b>Infelizmente, área desativada, aguarde na próxima versão!</b></font>";
include "config.php";
$sql3 = mysql_query("SELECT * FROM $tb3 ORDER BY data_ganhou ASC");
$cadastrados = mysql_num_rows($sql3);
echo "<div align=right>Temos <b>$cadastrados</b> Ganhador(es)<br><br></div>";
if (!$sql3){
echo "Nao foi possivel fazer a consulta";
}
while ($reg1 = mysql_fetch_array($sql3)){
$id_ganhador= $reg1['id_ganhador'];
$data_ganhou= $reg1['data_ganhou'];
$hora_ganhou= $reg1['hora_ganhou'];
 echo "
<div align=left><font face=\"verdana\" size=\"1\"><b>ID:</b> $id_ganhador | <b>Ganhou:</b> $data_ganhou $hora_ganhou | <a href=\"#\" onClick=\"window.open('exclusao.php?desejo=excluir&tipo=1&data=$data_ganhou','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=300,height=197'); return false;\" style=\"color: #000000\">Excluir</a> | <a href=\"#\" onClick=\"window.open('exibeuser.php?id=$id','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=300,height=197'); return false;\" style=\"color: #000000\">+ Mais</a> | <a href=\"#\" onClick=\"window.open('envia_email.php?email=$email','Janela2','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=590,height=350'); return false;\" style=\"color: #000000\">E-mail</a></div>";
}
mysql_query($sql3, $conexao);
include "rodape.php";
?>
