<?php
include("classe/conexao.php"); 

$sql = "INSERT INTO CLIENTE
	                   (CLIENTE_NOME,
	                    CLIENTE_SOBRENOME, 
	                    CLIENTE_END,
	                    CLIENTE_NUM_END,
	                    CLIENTE_END_CIDADE,
	                    ESTADO_CODIGO, 
	                    CLIENTE_END_CEP,
	                    CLIENTE_TELEFONE,
	                    CLIENTE_EMAIL,
	                    CLIENTE_NASC,
	                    CLIENTE_SEXO ) VALUES
	          			('$nome', '$sobrenome', 
	         			 '$rua', '$num', '$cidade', '$uf',  
	         			 '$cep', '$telefone', '$email', '$data', '$sexo')"; 
$con = $mysqli->query($sql) or die($mysqli->error);
echo "$sexo";
echo "Cliente cadastrado com sucesso!";
echo "<br><a href='cliente.php'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='listarclientes.php'>Clique aqui para realizar uma consulta</a><br>";

?>