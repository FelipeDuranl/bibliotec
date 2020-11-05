<?php
require 'conecta.php';

$codigofunc = $_POST['codigofunc'];
$codigolivro = $_POST['codigolivro'];
$stordem = $_POST['stordem'];
$stdata = $_POST['stdata'];
$dataaluguel = $_POST['dataaluguel'];
$datadevo = $_POST['datadevo'];

$consulta = "INSERT INTO `ordens_funcionarios` (`statusordem`, `statusdata`, `codfuncionario`, `codlivro`, `dataemprestimo`, `datadevolucao`) VALUES ('$stordem', '$stdata', '$codigofunc', '$codigolivro', '$dataaluguel', '$datadevo');";
$conexao -> query($consulta);

header('Location: deleteordens-func.php');

//echo "Dado inserido com sucesso";

?>
