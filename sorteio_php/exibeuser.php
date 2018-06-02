<title>Exibindo User ::IntDigitalSORTEIOSv1.1</title>
<body onLoad="moveTo(400,200);">
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" link="black" alink="black" vlink="black">
<font face=verdana size=1>
<?
include "config.php";
$id = $_GET['id'];
$sql= mysql_query("SELECT * FROM $tb1 where id='$id'");
while ($reg = mysql_fetch_array($sql)){
$nome2= $reg['nome2'];
$nick= $reg['nick'];
$data2= $reg['data2'];
$hora2= $reg['hora2'];
$ip2= $reg['ip2'];
$cidade= $reg['cidade'];
$estado= $reg['estado'];
$email= $reg['email'];

echo "<br><div align=center><font face=Arial size=2 color=blue>GRUPOS DOS CONCORRENTES</font></div><br><br><font face=Verdana size=3>-Nick: <b>$nick</font></b><br><br><b>Nome:</b> $nome2<br><b>ID:</b> $id<b><BR>E-mail:</b> $email <br><b>Cidade:</b> $cidade<BR><b>Estado:</b> $estado<BR><b>Criado em:</b> $data2 | $hora2 | $ip2<BR><BR>";
}
?><br>
