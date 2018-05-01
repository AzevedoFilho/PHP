<?php

$string = 'teste string de teste';
echo preg_replace( '/teste/', 'teste2', $string, 1 ); // 'teste2 string de teste'

?>