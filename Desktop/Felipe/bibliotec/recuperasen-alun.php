<?php

require 'conecta.php';

$email = $_POST['email'];
$senha1 = $_POST['senha1'];
$senha2 = $_POST['senha2'];
$telefone = $_POST['telefone'];
$senhanova = md5($_POST['senha1']);

if ($email<>'' && $telefone<>'' && $senha1<>'' && $senha2<>'' && $senha1 == $senha2) {
	
	$resultado = mysqli_query($conexao, "SELECT * FROM alunos");

	while($dados = mysqli_fetch_assoc($resultado)) {

		if ($dados['email'] == $email && $dados['telefone'] == $telefone) {

			$consulta = "UPDATE alunos SET senha = '$senhanova' WHERE email = '$email' ";
			$conexao -> query($consulta);
			header('Location: recupsenhafeita-alun.html');
			//se a verificação funciona
		}
		else {
			header('Location: recupsenhafalho-alun.html');
			//se a verificação de iguais falha
		}

	}

}

else {
	header('Location: recupsenhafalho-alun.html');
	//se os campos não estão preenchidos
}



?>