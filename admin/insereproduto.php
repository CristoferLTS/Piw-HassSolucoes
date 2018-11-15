<?php
include("classe/conexao.php"); 

$sql = "INSERT INTO PRODUTO
	                   (PRODUTO_NOME, PRODUTO_PRECO, PRODUTO_QTDE) VALUES
	          			('$desc', '$preco', '$qtde')"; 
$con = $mysqli->query($sql) or die($mysqli->error);

echo "Produto cadastrado com sucesso!";
echo "<br><a href='produto.php'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='listarprodutos.php'>Clique aqui para realizar uma consulta</a><br>";

?>