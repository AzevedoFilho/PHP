
<?
/* -------------------------------------------- */
/* -------------------------------------------- */
/* ---- Desenvolvimento BRAVOOW TECNOLOGIA ---- */
/* -------------------------------------------- */
/* -------------------------------------------- */

    $arquivo = fopen ("resultado.txt" , "r+" );
    $conta = fread($arquivo, filesize("resultado.txt"));
    fclose($arquivo);
    $conta +=1;
    $arquivo = fopen("resultado.txt","w+");
    fputs($arquivo, $conta);
    fclose($arquivo);
?>
<?
    include("resultado.txt");
?>

