<?php

session_start();
$nome = $_POST["name"];
$email = $_POST["email"];
$mensagem = $_POST["message"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure ='ssl';
$mail->SMTPAuth = true;
$mail->Username = "empresatesteemail@gmail.com";
$mail->Password = "empresajunior";

$mail->setFrom("empresatesteemail@gmail.com", "Empresa Junior");
$mail->addAddress("empresatesteemail@gmail.com");
$mail->Subject = "Email de contato da Biblioteca MCM";
$mail->msgHTML("<html>de: {$name}<br/>email: {$email}<br/>message: {$message}</html>");
$mail->AltBody = "de: {$name}\nemail:{$email}\nmessage: {$message}";

if($mail->send()) {
	//$_session ["success"] = "Mensagem enviada com sucesso";
	header('Location: regimento.html');
	echo "sucesso ao enviar mensagem";
} else {
	echo "Erro ao enviar mensagem " . $mail->ErrorInfo;
	//header("Location: contato.php");
}
die();


?>