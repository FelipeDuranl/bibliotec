<?php
require 'conecta.php';

$codigo = $_POST['codigo'];
$codigofunc = $_POST['codigofunc'];
$codigolivro = $_POST['codigolivro'];
$stordem = $_POST['stordem'];
$stdata = $_POST['stdata'];
$dataaluguel = $_POST['dataaluguel'];
$datadevo = $_POST['datadevo'];

$consulta = "UPDATE `ordens_funcionarios` SET `statusordem` = '$stordem', `statusdata` = '$stdata', `codfuncionario` = '$codigofunc', `codlivro` = '$codigolivro', `dataemprestimo` = '$dataaluguel', `datadevolucao` = '$datadevo' WHERE codordem_func = '$codigo';";
$conexao -> query($consulta);

header('Location: deleteordens-func.php');

//echo "Dado inserido com sucesso";

?>
