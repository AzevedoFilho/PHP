<?php

spl_autoload_register(function($nameClass){

	var_dump($nameClass);
 
 	$nameClass = str_replace("\\", DIRECTORY_SEPARATOR, $nameClass);
 
	$dirClass = "class";
 	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
 
 	if(file_exists($filename)){
     	require_once($filename);

 	}

});

//S9-A51

?>