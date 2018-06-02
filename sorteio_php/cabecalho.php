<?
echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">
<html>
<head>
<title>IntDigitalSORTEIOS - v 1.1</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
</head>

<body leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" link=\"black\" alink=\"black\" vlink=\"black\">
<a href='admin.php'><img src=\"logo.jpg\" width=\"778\" height=\"150\" border=0></a>
<font face=\"verdana\" size=\"1\">";
echo "<font face=verdana size=1>";
include "valida_cookies.php";
include "config.php";
$login= $HTTP_COOKIE_VARS['username'];
echo "<BR><BR>";
$sql3 =@ mysql_query("SELECT * FROM $tb2 where login='$login'");
if (!$sql3){
echo "Não foi possivel fazer a pesquisa";}
else {
while ($reg=mysql_fetch_array($sql3)){
$nivel = $reg['nivel'];
$nome = $reg['nome'];
$ip = $reg['ip'];
$data = $reg['data'];
$hora = $reg['hora'];
if ($nivel==0){
echo "<tr><br><font face=Arial size=3>Você não tem nenhuma permissão para Acessar essa Área!</font>
</div><BR><BR><BR><BR>";
} else {
echo "
    <tr>
    <font face=\"Verdana\" size=\"1\"><b>Nome</b>: $nome | <b>Login:</b> $username | <b>Último Log:</b> $data $hora $ip | Nível: <b>Administrador</b></tr></font>
    <div align=\"center\"><tr>
    <td><img src=\"seta.jpg\" width=\"10\" height=\"10\" border=\"0\"> <a target='_blank' href=cadastro.php> Novo User</a> <img src=\"seta.jpg\" width=\"10\" height=\"10\" border=\"0\">
    <td><a href=finalizar.php> Finalizar Sorteio</a> <img src=\"seta.jpg\" width=\"10\" height=\"10\" border=\"0\">
    <td><a href=ganha.php> Ganhadores</a> <img src=\"seta.jpg\" width=\"10\" height=\"10\" border=\"0\">
    <td><a href=busca.php> Buscar Usuários </a> <img src=\"seta.jpg\" width=\"10\" height=\"10\" border=\"0\">
    <td><a href=meusdados.php> Meus Dados </a> <img src=\"seta.jpg\" width=\"10\" height=\"10\" border=\"0\">
    <td><a href=logout.php?desejo=deslogando> Sair</a><br>
    <td><div align=\"left\"><tr></font>
    </div><BR><BR><BR><BR>";
}
  }
    }
?>
