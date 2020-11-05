<?php
require 'conecta.php';

$codigo = $_POST['codigo'];
$codigoaluno = $_POST['codigoaluno'];
$codigolivro = $_POST['codigolivro'];
$stordem = $_POST['stordem'];
$stdata = $_POST['stdata'];
$dataaluguel = $_POST['dataaluguel'];
$datadevo = $_POST['datadevo'];

$consulta = "UPDATE `ordens_alunos` SET `statusordem` = '$stordem', `statusdata` = '$stdata', `codaluno` = '$codigoaluno', `codlivro` = '$codigolivro', `dataemprestimo` = '$dataaluguel', `datadevolucao` = '$datadevo' WHERE codordem_alun = '$codigo';";
$conexao -> query($consulta);

header('Location: deleteordens-alunos.php');

//echo "Dado inserido com sucesso";

?>
