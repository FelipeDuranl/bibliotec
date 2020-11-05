<?php

include 'conecta.php';

$codigo = $_POST['codigo'];

$sql = "DELETE FROM alunos WHERE codaluno ='$codigo'";

$query = $conexao->query($sql);

header('Location: deletealunos.php');

?>