
<?php
include "cabecalho.php";
echo '<b><div align=center><font face="Verdana" size="3">Seja Bem-vindo Administrador!</div></font></b>';
/*include "config.php";
$busca = "SELECT * FROM $tb1 ORDER BY id ASC";
$total_reg = "$reg_por_page"; // número de registros por página
$pagina = $_GET['pagina'];
if (!$pagina) {
    $pc = "1";
} else {
    $pc = $pagina;
}
$inicio = $pc - 1;
$inicio = $inicio * $total_reg;

$limite = mysql_query("$busca LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca");

$tr = mysql_num_rows($todos); // verifica o número total de registros
$tp = $tr / $total_reg; // verifica o número total de páginas

// vamos criar a visualização
while ($dados = mysql_fetch_array($limite)) {
$id = $dados['id'];
$nick = $dados['nick'];
$nome2 = $dados['nome2'];
$email = $dados['email'];
$ip2 = $dados['ip2'];
$data2 = $dados['data2'];
$hora2 = $dados['hora2'];
 echo "
<div align=left><font face=\"verdana\" size=\"1\"><b>ID:</b> $id |    <b>Nome:</b> $nome2 | <b>E-mail:</b> $email | <b>Nick:</b> $nick | <b>Criado em:</b> $ip2  | $data2 | $hora2</div>";
}

// agora vamos criar os botões "Anterior e próximo"
$anterior = $pc -1;
$proximo = $pc +1;
if ($pc>1) {
    echo " <a href='?pagina=$anterior'>Anterior</a> ";
}
if ($pc<$tp) {
    echo " <a href='?pagina=$proximo'>Próxima</a>";
}*/
include "rodape.php";
?>
