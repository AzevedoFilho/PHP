<title>Excluindo User ::IntDigitalSORTEIOSv1.1</title>
<body onLoad="moveTo(400,200);">
<img src="excluir.jpg" width="200" height="50" border="0"><br>
<?
include "valida_cookies.php";
include "config.php";
$tipo= $_GET['tipo'];
$desejo= $_GET['desejo'];
$data= $_GET['data'];
$id1= $_GET['id1'];

 if ($desejo==excluir) {
 if ($tipo==1) {
 global $data;
 $sql1 = mysql_query("DELETE FROM $tb3 where data_ganhou='$data' LIMIT 1");
 if (!$sql1) {
 echo "Nao Foi Excluido";
 }else{
 echo "Concorrente Excluido com sucesso <b>Data:</b> $data_ganhou <b>Aguarde.....</b><meta http-equiv='refresh' content='1;URL=exclusao.php'>";}
  }
 if ($tipo==2) {
 global $id;
 $sql5 = mysql_query("DELETE FROM $tb1 where id='$id1' LIMIT 1");
 if (!$sql5) {
 echo "Nao Foi Excluido";
 }else{
 echo "Concorrente Excluido com sucesso <b>ID:</b> $id1 <b>Aguarde.....</b><meta http-equiv='refresh' content='1;URL=exclusao.php'>";}
  }
 }
?>
<br><BR><BR><BR>
<?
include "config.php";
$sql6 = mysql_query("SELECT * FROM $tb1");
$linhas = mysql_num_rows($sql6);
if (!$sql6){
echo "Nao foi possivel fazer a consulta";
}
global $linhas;
echo "<b>Total de Usuários:</b> $linhas";
?>
