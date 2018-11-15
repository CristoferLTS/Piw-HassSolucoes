<?php


$nome      = $_POST['nome'];
$cnpj      = $_POST['cnpj'];
$telefone  = $_POST['telefone'];
$email     = $_POST['email'];
$rua       = $_POST['rua'];
$num       = $_POST['num'];
$cidade    = $_POST['cidade'];
$uf        = strtoupper($_POST['estado']);
$cep       = $_POST['cep'];
$erro      = 0;

if ($nome == '') {
	$erro = 1;
}

if ($erro == 0) {
	include 'inserefornecedor.php';
}

?>