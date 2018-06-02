<?
include "config.php";
include "cabecalho_index.php";
if((!$passo) OR ($passo=="1")){
echo "<br>
<div align=center>
<center>
<table border=0 width=500 bgcolor=#B6C6CD cellspacing=1 cellpadding=0>
<tr>
<td width=100%>
<p align=center><font face=Verdana size=1 color=#668695>Instalando IntDigital</font></td>
</tr>
<tr>
<td width=100% bgcolor=#668695><font face=Verdana size=1 color=#B6C6CD>&nbsp;&nbsp;&nbsp;Primeiramente
certifique-se de ter configurado corretamente o arquivo &nbsp;config.php e
de ter seguido todos os passos do arquivo readme.html<br>
&nbsp;Feito isso, preencha o formulário abaixo com o login e senha da área
&nbsp;administrativa e precione instalar.</font></td>
</tr>
</table>
</center>
</div>
<br>
<div align=center>
<center>
<FORM ACTION=$PHP_SELF?passo=2 method=post>
<table border=0 width=450 cellspacing=1 cellpadding=0 bgcolor=#B6C6CD>
<tr>
<td width=100% bgcolor=#668695 colspan=2>
<p align=center><font size=1 face=Verdana color=#B6C6CD>Dados para o Login
Administrativo</font></p>
</td>
</tr>
<tr>
<td width=50% bgcolor=#FFFFFF>
<font face=Verdana size=2 color=#668695><b>&nbsp;Login:</b></font>
</td>
</center>
<td width=50% bgcolor=#FFFFFF>
<p align=left><font face=Verdana size=2 color=#668695><b>&nbsp;&nbsp;</b></font><input type=text name=login size=20 style='font-family: Verdana; font-size: 8 pt; background-color: #FFFFFF; color: #668695; border-style: dashed; border-width: 1' maxlength='20'>
</td>
</tr>
<center>
<tr>
<td width=50% bgcolor=#FFFFFF>
<font face=Verdana size=2 color=#668695><b>&nbsp;Senha:</b></font></td>
</center>
<td width=50% bgcolor=#FFFFFF>
<p align=left><font face=Verdana size=1 color=#668695><b>&nbsp;&nbsp;</b></font><input type=password name=pass size=8 style='font-family: Verdana; font-size: 8 pt; background-color: #FFFFFF; color: #668695; border-style: dashed; border-width: 1' maxlength='8'>
</td>
</tr>
<center>
<center>
<tr>
<td width=50% bgcolor=#FFFFFF>
<font face=Verdana size=2 color=#668695><b>&nbsp;Nome:</b></font></td>
</center>
<td width=50% bgcolor=#FFFFFF>
<p align=left><font face=Verdana size=2 color=#668695><b>&nbsp;&nbsp;</b></font><input type=text name=nome size=20 style='font-family: Verdana; font-size: 8 pt; background-color: #FFFFFF; color: #668695; border-style: dashed; border-width: 1'>
</td>
</tr>
<center>
<center>
<tr>
<td width=50% bgcolor=#FFFFFF>
<font face=Verdana size=2 color=#668695><b>&nbsp;E-mail Admin:</b></font></td>
</center>
<td width=50% bgcolor=#FFFFFF>
<p align=left><font face=Verdana size=2 color=#668695><b>&nbsp;&nbsp;</b></font><input type=text name=email_admin size=20 style='font-family: Verdana; font-size: 8 pt; background-color: #FFFFFF; color: #668695; border-style: dashed; border-width: 1'>
</td>
</tr>
<center>
<center>
<tr>
<td width=50% bgcolor=#FFFFFF>
<font face=Verdana size=2 color=#668695><b>&nbsp;Site:</b></font></td>
</center>
<td width=50% bgcolor=#FFFFFF>
<p align=left><font face=Verdana size=2 color=#668695><b>&nbsp;&nbsp;</b></font><input type=text name=site size=20 style='font-family: Verdana; font-size: 8 pt; background-color: #FFFFFF; color: #668695; border-style: dashed; border-width: 1'>
</td>
</tr>
<center>
<tr>
<td width=100% bgcolor=#668695 colspan=2 valign=middle height=26>
<p align=center>&nbsp;<input type=submit value=Instalar name=envia style='font-family: Verdana; font-size: 8 pt; background-color: #668695; color: #E4EBED; border: 1 dashed #B6C6CD'></p>
</td>
</tr>
</table>
</form>
</center>
</div>";
} elseif($passo=="2") {
include "config.php";
echo "<br>
<div align=center>
<center>
<table border=0 width=500 bgcolor=#B6C6CD cellspacing=1 cellpadding=0>
<tr>
<td width=100%>
<p align=center><font face=Verdana size=2 color=#668695>Status da
Instalação</font></td>
</tr>
<tr>
<td width=100% bgcolor=#668695><font face=Verdana size=2 color=#B6C6CD>";
$data = date ("d/m/Y",time());
$hora = strftime("%H:%M:%S");
$cria_admin = mysql_query("CREATE TABLE `admin` (
`data` VARCHAR( 250 ) NOT NULL ,
`hora` VARCHAR( 250 ) NOT NULL ,
`nome` VARCHAR( 250 ) NOT NULL ,
`login` VARCHAR( 250 ) NOT NULL ,
`senha` VARCHAR( 8 ) NOT NULL ,
`nivel` VARCHAR( 1 ) NOT NULL ,
`ip` VARCHAR( 50 ) NOT NULL ,
`email_admin` VARCHAR( 250 ) NOT NULL ,
`site` VARCHAR( 250 ) NOT NULL ,
`posts` VARCHAR( 10 ) NOT NULL ,
PRIMARY KEY (login))") or die("Erro ao criar tabela Admin");
echo "&nbsp;&nbsp;&nbsp;Tabela  Admin criada com sucesso<br>";

$add_user = mysql_query("INSERT INTO admin (data, hora, nome, login, senha, nivel, ip, email_admin, site, posts) VALUES ('$data','$hora','$nome','$login','$pass','1','$REMOTE_ADDR','$email_admin','$site','0')") or die("Erro ao criar usuário");
echo "&nbsp;&nbsp;&nbsp;Usuário $login criado com sucesso<br>";

$cria_ganhadores = mysql_query("CREATE TABLE `ganhadores` (
`id_ganhador` INT( 5 ) NOT NULL ,
`data_ganhou` VARCHAR( 80 ) NOT NULL ,
`hora_ganhou` VARCHAR( 80 ) NOT NULL ,
PRIMARY KEY (id_ganhador,data_ganhou))") or die("Erro ao criar a tabela ganhadores!");
echo "&nbsp;&nbsp;&nbsp;Tabela Ganhadores criada com sucesso<br><br>";

$cria_concorrentes = mysql_query("CREATE TABLE `concorrentes` (
`id` INT( 5 ) NOT NULL,
`nick` VARCHAR( 120 ) NOT NULL ,
`email` VARCHAR( 120 ) NOT NULL ,
`cidade` VARCHAR( 120 ) NOT NULL ,
`estado` VARCHAR( 120 ) NOT NULL ,
`nome2` VARCHAR( 250 ) NOT NULL ,
`data2` VARCHAR( 80 ) NOT NULL ,
`hora2` VARCHAR( 80 ) NOT NULL ,
`ip2` VARCHAR( 50 ) NOT NULL ,
PRIMARY KEY ( `id` ))") or die("Erro ao criar a tabela concorrentes");
echo "&nbsp;&nbsp;&nbsp;Tabela concorrentes criada com sucesso<br><br>";

echo "&nbsp;&nbsp;&nbsp;<b>IntDigitalSORTEIOSv1.1</b> Instalado com Sucesso!<br>";
echo "&nbsp;&nbsp;&nbsp;Remova o arquivo <b>install.php</b> do servidor para não ter problemas futuros!<br>";
echo "&nbsp;&nbsp;&nbsp;Rode o diretório de administração para começar a usar o <b>IntDigitalSORTEIOSv1.1</b>";
echo "</font></td>
</tr>
</table>
</center>
</div>
";
}
include "rodape.php";
?>
