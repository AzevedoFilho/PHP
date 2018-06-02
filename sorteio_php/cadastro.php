<?
//include "cabecalho.php";
//include "valida_cookies.php";
?>
<div aling="left">
<br><BR><img src="cadastro.jpg" width="200" height="50" border="0">
<form method="POST" action="cadastro.php?desejo=cadastrar">
<font face="Verdana" size="1">
<b>Nome: </b> <input type="text" name="nome2" size="15" style="font-family: Verdana; font-size: 8 pt; font-weight: bold"><br>
<b>Nick: </b> <input type="text" name="nick" size="15" style="font-family: Verdana; font-size: 8 pt; font-weight: bold"><br>
<b>E-mail: </b> <input type="text" name="email" size="15" style="font-family: Verdana; font-size: 8 pt; font-weight: bold"><br>
<b>Cidade: </b> <input type="text" name="cidade" size="15" style="font-family: Verdana; font-size: 8 pt; font-weight: bold"><br>
<b>Estado:<b><select name="estado">
			 <option value="">Escolher</option>
             <option value="AC" >AC</option>
             <option value="AL" >AL</option>
             <option value="AP" >AP</option>
             <option value="AM" >AM</option>
             <option value="BA" >BA</option>
             <option value="CE" >CE</option>
             <option value="DF" >DF</option>
             <option value="ES" >ES</option>
             <option value="GO" >GO</option>
   	         <option value="MA" >MA</option>
             <option value="MT" >MT</option>
             <option value="MS" >MS</option>
             <option value="MG" >MG</option>
             <option value="PA" >PA</option>
             <option value="PB" >PB</option>
             <option value="PR" >PR</option>
             <option value="PE" >PE</option>
             <option value="PI" >PI</option>
             <option value="RJ" >RJ</option>
             <option value="RN" >RN</option>
             <option value="RS" >RS</option>
             <option value="RO" >RO</option>
             <option value="RR" >RR</option>
             <option value="SC" >SC</option>
             <option value="SP" >SP</option>
             <option value="SE" >SE</option>
             <option value="TO" >TO</option>
</select><br>
<br><input type="submit" value="Cadastra" name="submeter" size="15" style="font-size: 8 pt; font-family: Verdana; font-weight: bold"></b></font></p>
</form>
</div>
</b>
<font face="Verdana" size="1">
<?

include "config.php";
$desejo= $_GET['desejo'];

if ($desejo==cadastrar){
if (!$nome2 || !$nick || !$email || !$estado) {
echo "</b>Todos os campos são obrigatórios!</b>";
}else{
$data2 = date ("d/m/Y",time());
$hora2 = strftime("%H:%M:%S");
$nome2 = $_POST['nome2'];
$nick= $_POST['nick'];
$email= $_POST['email'];
$nivel= $_POST['nivel'];
$id = rand(924,99999);
$sql=mysql_query("INSERT INTO $tb1 (id, nick, email, cidade, estado, nome2, data2, hora2, ip2) VALUES ('$id','$nick','$email', '$cidade', '$estado', '$nome2','$data2','$hora2','$REMOTE_ADDR')");
if (!$sql){
echo "Nao foi Possivel concluir o cadastro";
}
else {
echo "Criado com Sucesso!<br>";
}
}
}
echo '</font>';
?>
