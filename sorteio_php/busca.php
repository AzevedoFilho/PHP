<?
include "cabecalho.php";
include "valida_cookies.php";

echo '<BR>
 <img src="busca.jpg" width="200" height="50" border="0"><BR>
<BR>
 <p align="center"><form action=buscando.php method=post>
  <select size="1" name=por style="font-family: Verdana; font-size: 8 pt; font-weight: bold">
  <option SELECTED>Buscar Por...</option>
   <option value=email>E-mail</option>
   <option value=id>ID</option>
   <option value=nome>Nome</option>
   <option value=estado>Estado</option>
   <option value=nick>Nick</option>
</select> <input type=text name=valor style="font-family: Verdana; font-size: 8 pt; font-weight: bold"> <input type=submit value="Buscar >>" style="font-family: Verdana; font-size: 8 pt; font-weight: bold"></form></p>
</b> ';
include "rodape.php";
?>
