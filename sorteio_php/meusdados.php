<?
include "valida_cookies.php";
include "cabecalho.php";
include "config.php";

$username = $_COOKIE['username'];
$sql = mysql_query("SELECT * FROM $tb2 WHERE login='$username'");
if (!$sql){
echo "Usuário inexistente";
}
else{
while ($reg = mysql_fetch_array($sql)){
$nome = $reg['nome'];
$email_admin = $reg['email_admin'];
$site = $reg['site'];
$login = $reg['login'];
$senha = $reg['senha'];
$nivel = $reg['nivel'];
$ip = $reg['ip'];
global $username;
if ($nivel==0)
{ echo "<BR><BR><BR><b><p align=\"center\">Você não tem permissões para acessar essa área</p></b>"; break;}
 if ($nivel = 1) {
 $nivel_tratado = 'Administrador';
 }
 if ($nivel = 0) {
 $nivel_tratado = 'Normal';
 }
echo"
<div align=left><form action=\"$PHP_SELF?desejo=atualizar&usuario=$username\" method=POST>
<b>Nome:</b> <input type=text name=nome value=\"$nome\" style=\"font-family: Verdana; font-size: 8 pt; font-weight: bold\"><br>
<b>Login:</b> <input type=text name=login value=\"$login\" style=\"font-family: Verdana; font-size: 8 pt; font-weight: bold\"><br>
<b>Senha: </b> <input type=text name=senha value=\"$senha\" style=\"font-family: Verdana; font-size: 8 pt; font-weight: bold\"><br>
<b>E-mail Admin: </b> <input type=text name=email_admin value=\"$email_admin\" style=\"font-family: Verdana; font-size: 8 pt; font-weight: bold\"><br>
<b>Site: </b> <input type=text name=site value=\"$site\" style=\"font-family: Verdana; font-size: 8 pt; font-weight: bold\"><br>
<b>Nivel:</b> $nivel_tratado<br>
<BR>
<input type=submit value=\"Atualizar\" style=\"font-family: Verdana; font-size: 8 pt; font-weight: bold\">
</form>
</div>";
}
}
$desejo= $_GET['desejo'];
$usuario = $_GET['usuario'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$email_admin = $_POST['email_admin'];
$site = $_POST['site'];
if ($desejo==atualizar){
$sql= mysql_query("UPDATE $tb2 SET nome='$nome', login='$login', senha='$senha', email_admin='$email_admin', site='$site' WHERE login='$username';");
if (!$sql)
{ echo "Não foi possivel atualizar seus dados :("; }
else
{
echo "<h2>Seus Dados Foram Atualizados com Sucesso <b>Aguarde....</b></h2><meta http-equiv='refresh' content='1;URL=index.php'>";
  }
}
mysql_close($conexao);
include "rodape.php";
?>
