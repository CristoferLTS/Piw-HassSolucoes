<?php 
include("classe/conexao.php");
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Produto</title>

	<!--pacote Bootstrap responsive page-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="css/estilo.css" rel="stylesheet" type="text/css" />
</head>
<style >
	input, select {
		position: absolute;
		left: 170px;
	}
</style>
<header ><!--Cabeçalho-->
	<div class="jumbotron text-center"  style=" height: 350px; ">
		<img src="Imagens/Hv2.png" width="100">
		<h1 style="margin-top:-15px;" >			
			<label><span >Hass</span> </label> <b> <span>Soluções</span></b>												
		</h1>
		<p style="font-size:25px">Serviços de informática e segurança</p> 
	</div>
</header><!--Fim do Cabeçalho-->
<body>
<form method="POST" action="cadastrarproduto.php">
		<h1>Produto</h1>
        <hr />
		<label class="labelCadastroNOM" >Cadastro: </label>
		<table border="0" cellspacing="0" >
			<tr>
				<td>
					<label for="descricao" class="cadastroTable">Descrição: </label>
					<input name="descricao" type="text" size="20" />
					<br>
					<label for="preco" class="cadastroTable"  >Valor: </label>
					<input name="preco"type="number" value="0.00" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" size="10"  />
                    <br>
                    <label for="qtde" class="cadastroTable">Quantidade: </label>
					<input name="qtde" type="number" size="10"  />
                    <br>
				</td>
			</tr>
		</table>
	
		<button class="buttonGravarPROD" type="submit" name="enviar" value="Enviar" style=" background-color: lightgreen;  font-size: 20px;" >Gravar</button>
		<input class="buttonVoltarPROD" type="button" value="Voltar" onClick="history.go(-1)" style=" background-color: lightblue;  font-size: 20px;"> 
	</form>
</body>
</html>
