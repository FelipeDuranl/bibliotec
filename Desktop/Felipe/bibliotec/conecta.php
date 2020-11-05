<?php 

$servidor= 'localhost';
$usuario='root';
$senha='';
$banco='bibliotec';

//Conexão utilizando os parâmetros acima

$conexao = new mysqli($servidor,$usuario,$senha,$banco);

$sql= "SET NAMES 'utf8'";
mysqli_query($conexao, $sql);
$sql = 'SET character_set_connection=utf8';
mysqli_query($conexao, $sql);
$sql ='SET character_set_client=utf8';
mysqli_query($conexao, $sql);
$sql ='SET character_set_results=utf8';
mysqli_query($conexao, $sql);

//Caso algo de errado ocorra, exibe mensagem de erro

if (mysqli_connect_errno()){
	echo "Erro de conexão";

}


 
?>