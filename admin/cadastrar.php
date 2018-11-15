<?php


$nome      = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$rua       = $_POST['rua'];
$num       = $_POST['num'];
$cidade    = $_POST['cidade'];
$uf        = strtoupper($_POST['estado']);
$cep       = $_POST['cep'];
$telefone  = $_POST['telefone'];
$email     = $_POST['email'];
$data      = $_POST['data'];
$sexo      = $_POST['sexo'];
$erro      = 0;

if ($nome == '') {
	$erro = 1;
}

if ($erro == 0) {
	include 'insere.php';
}

?>