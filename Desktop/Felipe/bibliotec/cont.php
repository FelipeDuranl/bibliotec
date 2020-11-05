<?php
$empresa = $_POST["empresa"];
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$texto = "
<h3>Formulário</h3>
<b>Empresa:</b> $empresa
<b>Nome do Cliente:</b> $nome
<b>Telefone:</b> $telefone
<b>E-mail:</b> $email
<b>Mensagem:</b> $mensagem
";

$emailDestino = "brosslightyear@gmail.com";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From:" . $email . "\r\n";
mail($emailDestino, 'Teste de E-mail', $texto, $headers);

//AQUI ENVIO O PRIMEIRO EMAIL PARA O CLIENTE

$headers2 = "MIME-Version: 1.0\r\n";
$headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers2 .= "From:" . $email . " \r\n";
$texto .= "Seu e-mail foi recebido por um de nossos atendentes
Em breve será respondido!



//REDIRECIONO PARA PAGINA CONTATO.PHP
print '<script>location.href= "contato.php";</script>';
?>