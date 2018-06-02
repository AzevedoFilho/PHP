<?

$host = "localhost";       // localhost
$usuariodb="root";        ///usuario do banco de dados
$senhadb="";            ///senha do usuario do bd
$db="int";               /// nome do banco de dados
$tb1 = "concorrentes"; // NAO ALTERE AQUI DE MANEIRA ALGUMA !!
$tb2 = "admin"; // NAO ALTERE AQUI DE MANEIRA ALGUMA !!
$tb3 = "ganhadores"; // NAO ALTERE AQUI DE MANEIRA ALGUMA !!
$reg_por_page = 45; // Número de registro por pages

$conexao=mysql_connect ("$host", "$usuariodb", "$senhadb") or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ("$db") or die("não foi possivel");
?>
