<?php

include 'conecta.php';

$codigo = $_POST['codigo'];
$nomelivro = $_POST['nomelivro'];
$autor = $_POST['autor'];
$qtde = $_POST['qtde'];
$data = $_POST['data'];
$isbn = $_POST['isbn'];
$tombo = $_POST['tombo'];
$editora = $_POST['editora'];

$consulta = "UPDATE `livros` SET `nomelivro` = '$nomelivro', `qtde_livro` = '$qtde', `autor` = '$autor', `data` = '$data', `isbn` = '$isbn', `tombo` = '$tombo', `editora` = '$editora' WHERE `codlivro` = '$codigo';";
$conexao -> query($consulta);

header('Location: deletelivros.php');

//echo "Dado inserido com sucesso";

?>
