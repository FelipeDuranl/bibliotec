<?php

include 'conecta.php';

$codigo = $_POST['codordalun'];

$sql = "DELETE FROM ordens_alunos WHERE codordem_alun ='$codigo'";

$query = $conexao->query($sql);

header('Location: deleteordens-alunos.php');

?>