<?php 

require "conecta.php";


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$telefone = $_POST['telefone'];



if ($nome <>'' && $email <>'' && $telefone <>'' && $senha <>'') {

	$consulta = "INSERT INTO funcionarios (nome, email, senha, telefone) VALUES('$nome', '$email','$senha', '$telefone')";

	$conexao -> query($consulta);

	header('Location: cadastrofeito-func.html');

}

else {
	header('Location: cadastrofalho-func.html');
}

?>