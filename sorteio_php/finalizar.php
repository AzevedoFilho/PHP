<? include "cabecalho.php"; ?>
<? include "valida_cookies.php"; ?>
<font face=verdana size=1>
<?
$desejo= $_GET['desejo'];
echo '<BR>Deseja Realmente Finalizar o Sorteio? <font color="FF0000"><a href="finalizar.php?desejo=fim">Sim</a> | <a href="finalizar.php?desejo=nao">Não</a></font>';
  if ($desejo==fim){
  include "config.php";
  $sql1 = mysql_query("SELECT * FROM $tb1 ORDER BY RAND() LIMIT 1");
  if (!$sql1){
  echo "Nao foi possivel fazer a consulta";
  }
  while($reg = mysql_fetch_array($sql1)) {
  $id= $reg['id'];
  $data_ganhou = date("d/m/Y",time());
  $hora_ganhou = strftime("%H:%M:%S");
  echo "<BR><BR><div align=center><H1>GANHADOR FOI</H1></div><BR><BR><div align=center><b>ID:</b> $id | <b>Quando ganhou:</b> $data_ganhou $hora_ganhou | <a href=\"#\" onClick=\"window.open('exibeuser.php?id=$id','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=300,height=197'); return false;\" style=\"color: #000000\">+ Mais</a><BR><BR></div>";
  include "config.php";
  $sql2 = mysql_query("INSERT INTO ganhadores (id_ganhador, data_ganhou, hora_ganhou) VALUES ('$id','$data_ganhou','$hora_ganhou')");
  echo 'Inserido Também no banco de dados dos Ganhadores !';
  }
}
 if ($desejo==nao){
 echo "<meta http-equiv='refresh' content='1;URL=finalizar.php'>" ;
 }
?>
<? include "rodape.php"; ?>
