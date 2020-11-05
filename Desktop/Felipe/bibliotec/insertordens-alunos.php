<?php
require 'conecta.php';

$codigoaluno = $_POST['codigoaluno'];
$codigolivro = $_POST['codigolivro'];
$stordem = $_POST['stordem'];
$stdata = $_POST['stdata'];
$dataaluguel = $_POST['dataaluguel'];
$datadevo = $_POST['datadevo'];

$consulta = "INSERT INTO `ordens_alunos` (`statusordem`, `statusdata`, `codaluno`, `codlivro`, `dataemprestimo`, `datadevolucao`) VALUES ('$stordem', '$stdata', '$codigoaluno', '$codigolivro', '$dataaluguel', '$datadevo');";
$conexao -> query($consulta);

header('Location: deleteordens-alunos.php');

//echo "Dado inserido com sucesso";

?>
