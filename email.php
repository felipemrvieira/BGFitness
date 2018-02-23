<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$to = "contato@bgfitness.com.br";
$subject = "Mensagem recebida do site";
$txt = "Dados da mensagem: nome: ".$nome. "\r\n" .
"Email: ".$email. "\r\n" .
"Telefone: ".$telefone. "\r\n" .
"Mensagem: ".$mensagem;

$headers = "From: contato@bgfitness.com.br" . "\r\n" .
"CC: gerencia@bgfitness.com.br";

mail($to,$subject,$txt,$headers);

header("location: /");
die();
?>
