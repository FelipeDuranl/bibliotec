<?php

require "conecta.php";


$rm = $_POST['rm'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$curso = $_POST['curso'];
$senha = md5($_POST['senha']);


if ($rm <>'' && $nome <>'' && $email <>'' && $telefone <>'' && $curso <>'' && $senha <>'') {
	# code...

	$consulta = "INSERT INTO alunos (rm, nomealuno, email, telefone, curso, senha) VALUES ('$rm','$nome', '$email', '$telefone', '$curso', '$senha')";

	$conexao -> query($consulta);

	header('Location: cadastrofeito-alun.html');

}
else {
	header('Location: cadastrofalho-alun.html');
}

?>