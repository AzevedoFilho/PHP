<?php


function test($callback){

	//Processo LENTO

	$callback();

}


test(function(){

	echo "Terminou!";

});


?>