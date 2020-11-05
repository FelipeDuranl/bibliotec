<?php

require 'conecta.php';

$codigo = $_POST['codigo'];
$nomealuno = $_POST['nomealuno'];
$email = $_POST['email'];
$rm = $_POST['rm'];
$telefone = $_POST['telefone'];
$curso = $_POST['curso'];

$consulta = "UPDATE `alunos` SET `rm` = '$rm', `nomealuno` = '$nomealuno', `telefone` = '$telefone', `curso` = '$curso', `email` = '$email' WHERE `codaluno` = '$codigo';";
$conexao -> query($consulta);

header('Location: deletealunos.php');

//echo "Dado inserido com sucesso";

?>
