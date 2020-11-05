<?php
session_start();
require "conecta.php";

$email = !empty($_REQUEST['email'])?$_REQUEST['email']:'';
$senha = md5(!empty($_REQUEST['senha'])?$_REQUEST['senha']:'');

if($email&&$senha){

	$consulta = "SELECT * FROM funcionarios WHERE email = '$email' AND senha = '$senha'";
	$resultado = $conexao->query($consulta);
	$registros = $resultado->num_rows;//retorna o nº de linhas encontrados com email e senha
	$resultado_usuario = mysqli_fetch_assoc($resultado);

	if($registros<>0){

		$_SESSION['nome'] = $resultado_usuario['nome'];
		$_SESSION['email'] = $resultado_usuario['email'];

		header('Location: funcionario.php');//joga usuario para pg restrita

	}

	else{
		// ERRO NO LOGIN
		header('Location: loginfuncionario.html');
	}
}

else{
		// CAMPOS VAZIOS
		header('Location: loginfuncionario.html');
}
?>