<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!--Como refresh abaixo,direcionamos para a pagina loga.html em 3 segundos -->
<META HTTP-EQUIV=Refresh CONTENT="3; URL=../Login/loga.html">
<title>Logout</title>
</head>

<?php
//destruo as variaveis da session.
session_start(); 
session_destroy();
session_unset(); 

?>

<body>
</body>
</html>