<?php

include 'conecta.php';

$codigo = $_POST['codigo'];

$sql = "DELETE FROM livros WHERE codlivro ='$codigo'";

$query = $conexao->query($sql);

header('Location: deletelivros.php');

?>