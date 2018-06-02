<?
echo "<br><br>";
include "config.php";
$sql4 = mysql_query("SELECT * FROM $tb2");
if (!$sql4){
echo "Nao foi possivel fazer a consulta";
}
while ($reg4 = mysql_fetch_array($sql4)){
$site= $reg4['site'];

$data_hj =date ("d/m/Y",time());
$hora_agora = strftime("%H:%M:%S");
echo "<div align=center><font face=Verdana size=1>$site - Todos os Direitos Reservados</div>
<br><div align=left><b>Data:</b> $data_hj $hora_agora | <a href='http://www.intdigital.com.br/' target='_blank'>Problemas?</a></div></font>";
}
?>
