<?php
//inicio as funcoes necessarias para trabalhar com sessao 
ob_start();
session_start();

//incluindo arquivo de conexao com o banco 
require_once("../config/config.php");

//Recebendo dados do formulario html 
$codace = $_POST['codace'];
$senha  = $_POST['senha'];

//passando as variaveis para maiusculo 
$codace = strtoupper($codace);
$senha = strtoupper($senha);

//verifico se houve falha na execucao da variavel $conn e imprimo
if(!$conn)
{ 
	echo "Falha ao conectar com o banco <br> <img src=../imagens/alerta_64x64.png>";
}
else 
{ // Abre else. Caso nao haja erro executa instrucao.

    //alimento minha query- Ajuste somente o nome da tabela e campo(depois do Where)
		$query = "SELECT * FROM TABELA WHERE USU_CODACE='$codace'";

	//verifico erros no select 
		$parse = ociparse($conn, $query);

	//mando executar minha instrucao
		$result = ociexecute($parse);
		
	//alimento a array
		$dbarray = oci_fetch_array($parse);

//verifico se houve falha na variavel $result e imprimo (result executa o select)
	if(!$result)
	{
		echo "Falha no Select <br> <img src=../imagens/alerta_64x64.png>";
	}

	// abre o else e Efetua o select caso nao haja erro
else 
{ //abre else 01 
	    
		if ($dbarray["USU_CODACE"] != $codace)
		{
    	   echo "<script>alert('Usuário Inválido! Efetue um novo login.'); history.back()</script>";
	       exit;
		}
		
		else
		{ //abre else 02
		  			
			//alimento as variaveis com o resultado da array
			$descricao = $dbarray["USU_DESCRI"];
			$identi = $dbarray["USU_IDENTI"];
			$pass = $dbarray["USU_SENACE"];
			$email= $dbarray["USU_E_MAIL"];
			  
		  if($dbarray["USU_SENACE"] != $senha)
      	  {
		       echo "<script>alert('Senha Inválida! Efetue um novo login.'); history.back()</script>";
 		       exit;
	      }
		
			else 
			{
			
				//crio as sessoes
				$_SESSION["usuario"]     = $codace;
	         	$_SESSION["emailUsuario"]= $email;
	
	    	   //redirecionando para pagina do home
			 	header("Location: ../Home/home.php");
			
		     }

		} //fecha else 02

} //fecha o else 01

}

//finalizo a conexao com o banco 
	oci_close($conn);
?>



