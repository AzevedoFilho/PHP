<?php

require_once("Config.php");

/*
//Carrega apenas um usuário.
$root = new Usuario();
$root->loadbyId(4);
echo $root;
//S13-A63
*/

/*
//Carrega uma lista de usuários.
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*
//Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);
*/

/*
//Carrega um usuário usando o login e a senha. S13-A64
$usuario = new Usuario();
$usuario->login("root","!@#$");
echo $usuario;
//S13-A64
*/

/*
//Criando um novo usuário
$aluno = new Usuario("aluno","@alun0");
$aluno->insert();
echo $aluno;
//S13-A65
*/

/*
//Atualiza um usuário
$usuario = new Usuario();
$usuario->loadbyId(8);
$usuario->update("bravoow","!@#$%¨&*");
echo $usuario;
//S13-A66
*/

/*
//Deleta um usuário
$usuario = new Usuario();
$usuario->loadbyId(7);
$usuario->delete();
echo $usuario;
//S13-A67
*/



?>