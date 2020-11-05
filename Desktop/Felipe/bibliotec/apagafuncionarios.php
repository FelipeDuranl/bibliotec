<?php

include 'conecta.php';

$codigofunc = $_POST['codigofunc'];

$sql = "DELETE FROM funcionarios WHERE codfuncionario = '$codigofunc'";

$query = $conexao->query($sql);

header('Location: deletefuncionarios.php');

?>