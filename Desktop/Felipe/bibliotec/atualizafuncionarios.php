<?php

include 'conecta.php';

$codigo = $_POST['codigo'];
$nomefuncionario = $_POST['nomefuncionario'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$consulta = "UPDATE `funcionarios` SET `nome` = '$nomefuncionario', `email` = '$email', `telefone` = '$telefone' WHERE `codfuncionario` = '$codigo';";
$conexao -> query($consulta);

header('Location: deletefuncionarios.php');

//echo "Dado inserido com sucesso";

?>