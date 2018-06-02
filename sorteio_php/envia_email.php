<title>Enviando E-mail para um usuário diferente :: IntSORTEIOSv1.1</title>
<body onLoad="moveTo(400,200);">
<?
$email1 = $_GET['email'];
$autor8 = $_GET['username2'];
echo '<script>
<!--
document.write(unescape("%3Cscript%20language%3D%22JavaScript%22%20type%3D%22text/javascript%22%3E%0D%0Afunction%20inserts%28text%29%20%7B%0D%0A%20%20%20window.alert%28%22Aten%E7%E3o%3A%5Cn________________________%5Cn%5CnAp%F3s%20voc%EA%20clicar%20no%20OK%20Ir%E1%20aparecer%20um%20c%F3digo%20dentro%20do%20campo%20de%20texto%2C%20nesse%20script%20exisem%20areas%20onde%20voc%EA%20vai%20precisar%20editar%20%E9%20facil%20somente%20substitua%20as%20partes%20onde%20o%20c%F3digo%20pede%2C%20Obrigado.%22%29%3B%0D%0A%09text%20%3D%20%27%20%27%20+%20text%20+%20%27%20%27%3B%0D%0A%09if%20%28document.F1.msg.createTextRange%20%26%26%20document.F1.msg.caretPos%29%20%7B%0D%0A%09%09var%20caretPos%20%3D%20document.F1.msg.caretPos%3B%0D%0A%09%09caretPos.text%20%3D%20caretPos.text.charAt%28caretPos.text.length%20-%201%29%20%3D%3D%20%27%20%27%20%3F%20text%20+%20%27%20%27%20%3A%20text%3B%0D%0A%09%09document.F1.msg.focus%28%29%3B%0D%0A%09%7D%20else%20%7B%0D%0A%09document.F1.msg.value%20%20+%3D%20text%3B%0D%0A%09document.F1.msg.focus%28%29%3B%0D%0A%09%7D%0D%0A%7D%0D%0A%3C/script%3E%0D%0A%3Cscript%3E%0D%0Afunction%20valida%28%29%7B%0D%0Aif%20%28F1.titulo.value%3D%3D%22%22%29%7B%0D%0Aalert%28%22O%20titulo%20est%E1%20em%20branco%22%29%0D%0Areturn%20false%0D%0A%7D%0D%0Aif%20%28F1.msg.value%3D%3D%22%22%29%7B%0D%0Aalert%28%22A%20mensagem%20est%E1%20em%20branco%22%29%0D%0Areturn%20false%0D%0A%7D%0D%0Aelse%7B%0D%0AF1.submit%28%29%0D%0Areturn%20true%0D%0A%7D%0D%0A%7D%0D%0A%0D%0A%0D%0A%3C/script%3E"));
//-->
</script><body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="550" border="0" cellspacing="0" cellpadding="0">
  </tr>
  <tr>
<font size="1" face="Verdana" color=#ff0000>Enviando E-mail para: <b>';
 print "$email1"; echo'</b></font>
  </tr>
  <tr>
    <td width="17" height="200" valign="top">

    </td>
    <td height="200">
      <form action="Msg_form.php" method="post">
      <input type="hidden" name="autor" value="'; print "$autor8"; echo '">
      <table width="75" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
          <td>
          <td>
          <input type="button" onclick="javascript:inserts(\'<img src=COLOQUE_AQUI_O_ENDEREÇO_DA_IMAGEM border=0 width=largura height=altura>\')" value="Imagem" class=form>
          <input type="button" onclick="javascript:inserts(\'<BR>\')" value="Quebra de Linha" class=form>
          <input type="button" onclick="javascript:inserts(\'<a href=COLOQUE AQUI O ENDEREÇO DA PAGINA> Nome do Link </a>\)" value="URL" class=form>
                 <BR>   <tr>
            <td width="18%"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Autor:</font></strong></td>
            <td width="82%"> <strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b>'; print "$autor8"; echo '</b>
              </font></strong></td>
          </tr>
          <tr>
            <td width="18%"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Assunto:</font></strong></td>
            <td width="82%"> <strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><input name="titulo" type="text" class="form">
              </font></strong></td>
          </tr>
          <tr>
            <td width="18%"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">E-mail:</font></strong></td>
            <td width="82%"> <strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><input name="email2" type="text" value="';
            print "$email1";
            echo '" class="form">
              </font></strong></td>
              </tr>
          <tr>
            <td><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Formata&ccedil;&atilde;o:</font></strong></td>
            <td><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
              <select name="formatacao" class="form">
                <option value="texto">Texto</option>
                <option value="html" SELECTED>HTML</option>
              </select>
              </font></strong></td>
          </tr>
          <tr>
            <td><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Mensagem:</font></strong></td>
            <td bordercolor="#CCCCCC"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
              <textarea name="msg" cols="50" rows="7" class="form"></textarea>
              </font></strong></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="submit" type="submit" value="Enviar" onclick="valida()"></td>
          </tr>
        </table>
      </form></td>
    </td>
  </tr>
</table>
</body>
</html>';
?>
