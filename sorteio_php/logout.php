<?
$desejo= $_GET['desejo'];
if ($desejo==deslogando){
setcookie("username");
setcookie("senha");
include "config.php";
$data_ult = date ("d/m/Y",time());
$hora_ult = strftime("%H:%M:%S");
$sql= mysql_query("UPDATE $tb2 SET data='$data_ult', hora='$hora_ult', ip='$REMOTE_ADDR' WHERE login='$username';");
if (!$sql)
{ echo "Não foi possivel atualizar seus dados :("; }
header("Location: index.php");
}else{
   echo 'ERROR AO DESLOGAR!';
  }
?>


