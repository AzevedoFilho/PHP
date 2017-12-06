<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback(); cancela o pedido.
$conn->commit();

echo "Dados excluidos com sucesso! Status: Deletado!"

//Rollback de dados DADOS S12-A61

?>