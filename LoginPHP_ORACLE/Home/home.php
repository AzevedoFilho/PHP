<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pagina de Administracao</title>
</head>
<body>
<?php

ob_start();

session_start();
//Caso nao tenha efetuado o login, ao tentar acessar esta pagina o usuario sera redirecionado para o loga.html
if( (!isset($_SESSION["usuario"])) AND (!isset($_SESSION["emailUsuario"])) )
 {
	 echo "<script>alert('Voce nao efetuou o login!'); window.location='../Login/loga.html';</script>";
     exit;
 }
  
  else
  {
  
?>


   Aqui estou como administrador, logado com o usuário: <?php echo $_SESSION["usuario"] ?> <br />
   E-mail: <?php echo $_SESSION["emailUsuario"] ?>

  <br /><br /> 

<a href="../Login/logout.php"> Efetuar Logoff</a>     

</body>
</html>
<?php
  } //fecha o else
  
?>  