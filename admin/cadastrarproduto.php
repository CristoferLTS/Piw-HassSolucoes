<?php


$desc      = $_POST['descricao'];
$preco     = $_POST['preco'];
$qtde      = $_POST['qtde'];
$erro      = 0;

if ($desc == '') {
	$erro = 1;
}

if ($erro == 0) {
	include 'insereproduto.php';
}

?>