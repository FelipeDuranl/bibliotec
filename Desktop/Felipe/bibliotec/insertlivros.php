<?php
require 'conecta.php';

$nomelivro = $_POST['nomelivro'];
$autor = $_POST['autor'];
$qtde = $_POST['qtde'];
$data = $_POST['data'];
$isbn = $_POST['isbn'];
$tombo = $_POST['tombo'];
$editora = $_POST['editora'];

$consulta = "Insert into livros (nomelivro, autor, qtde_livro,  data, isbn, tombo, editora) values ('$nomelivro','$autor', '$qtde', '$data', '$isbn','$tombo', '$editora')";
$conexao -> query($consulta);

header('Location: deletelivros.php');

//echo "Dado inserido com sucesso";

?>
