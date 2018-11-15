<?php
include("classe/conexao.php"); 

$sql = "INSERT INTO FORNECEDOR
	                   (FORNECEDOR_NOME,
	                    FORNECEDOR_CNPJ, 
	                    FORNECEDOR_END,
	                    FORNECEDOR_NUM_END,
	                    FORNECEDOR_END_CIDADE,
	                    ESTADO_CODIGO, 
	                    FORNECEDOR_END_CEP,
	                    FORNECEDOR_TELEFONE,
	                    FORNECEDOR_EMAIL) VALUES
	          			('$nome', '$cnpj', 
	         			 '$rua', '$num', '$cidade', '$uf',  
	         			 '$cep', '$telefone', '$email')"; 
$con = $mysqli->query($sql) or die($mysqli->error);

echo "Fornecedor cadastrado com sucesso!";
echo "<br><a href='fornecedor.php'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='listarfornecedores.php'>Clique aqui para realizar uma consulta</a><br>";

?>