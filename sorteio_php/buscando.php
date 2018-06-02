
<font  face=verdana size=1>
<? include "cabecalho.php"; ?>
<BR><BR><BR>
<?
include "valida_cookies.php";
$por = $_POST['por'];
$valor = $_POST['valor'];
if (empty($por) || empty($valor)){
echo "Voce nao preencheu os campos da busca";
}
else{
global $por;
global $valor;
if($por==email){
include "config.php";
$sql=mysql_query("SELECT * FROM $tb1 WHERE email LIKE '%$valor%' ORDER BY id ASC");
$linhas=@mysql_num_rows($sql);
}
if($por==id){
include "config.php";
$sql=mysql_query("SELECT * FROM $tb1 WHERE id LIKE '%$valor%' ORDER BY id ASC");
}
if($por==nome){
include "config.php";
$sql=mysql_query("SELECT * FROM $tb1 WHERE nome2 LIKE '%$valor%' ORDER BY id ASC");
}
if($por==estado){
include "config.php";
$sql=mysql_query("SELECT * FROM $tb1 WHERE estado LIKE '%$valor%' ORDER BY id ASC");
}
if($por==nick){
include "config.php";
$sql=mysql_query("SELECT * FROM $tb1 WHERE nick LIKE '%$valor%' ORDER BY id ASC");
}
$linhas=@mysql_num_rows($sql);
if ($linhas==0){
echo "<BR><BR><BR><p align=\"center\"><h2><b>Não</b> Há Resultados com essa Pesquisa</p></h2><br>";
}
if ($linhas >=1){
while ($reg = mysql_fetch_array($sql)){
$id = $reg['id'];
$nome2 = $reg['nome2'];
$nick = $reg['nick'];
$email = $reg['email'];
global $login;
echo "<div align=left><img src=\"seta.jpg\" width=\"10\" height=\"10\" border=\"0\"><b>ID:</b> $id | <b>Nome:</b> $nome2 | <a href=\"#\" onClick=\"window.open('exclusao.php?tipo=2&desejo=excluir&id1=$id','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=300,height=197'); return false;\" style=\"color: #000000\">Excluir</a> | <a href=\"#\" onClick=\"window.open('exibeuser.php?id=$id','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=300,height=197'); return false;\" style=\"color: #000000\">+ Mais</a> | <a href=\"#\" onClick=\"window.open('envia_email.php?email=$email&username2=$nome','Janela2','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=590,height=350'); return false;\" style=\"color: #000000\">E-mail</a><br></div>";
       }
     }
   }
echo "<br><center>Foram encontrados <b>$linhas</b> registro(s).<br></center>";
include "rodape.php";
?>

