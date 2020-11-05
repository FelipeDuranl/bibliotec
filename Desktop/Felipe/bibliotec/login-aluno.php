<?php
session_start();
require "conecta.php";

$rm = !empty($_REQUEST['rm'])?$_REQUEST['rm']:'';
$senha = md5(!empty($_REQUEST['senha'])?$_REQUEST['senha']:'');

if($rm&&$senha){

	$consulta = "SELECT * FROM alunos WHERE rm = '$rm' AND senha = '$senha'";
	$resultado = $conexao->query($consulta);
	$registros = $resultado->num_rows;  //retorna o nº de linhas encontrados com email e senha
	$resultado_usuario = mysqli_fetch_assoc($resultado);

	if($registros<>0){

		$_SESSION['rm'] = $resultado_usuario['rm'];
		$_SESSION['nomealuno'] = $resultado_usuario['nomealuno'];
		$_SESSION['email'] = $resultado_usuario['email'];
		
		header('Location: aluno.php');//joga usuario para pg restrita

	}

	else{
		// ERRO NO LOGIN
		header('Location: loginaluno.html');
	}
}

	else{
		// CAMPOS VAZIOS
		header('Location: loginaluno.html');
	}

?>


