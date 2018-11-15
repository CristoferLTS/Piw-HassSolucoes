<?php 
include("classe/conexao.php");
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fornecedor</title>

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
<form method="POST" action="cadastrarfornecedor.php">
		<h1>Cadastro do fornecedor</h1>
        <hr />
		<label class="labelCadastroNOM" >Informações</label>
		<table border="0" cellspacing="0" >
			<tr>
				<td>
					<label for="nome" class="cadastroTable">Nome:</label>
					<input name="nome" type="text" size="10" />
					<br>
					<label for="cnpj" class="cadastroTable">CNPJ:</label>
					<input name="cnpj" type="text" size="20"  />
					<br>
				</td>

			</tr>
		</table>
		<br>
		<div style="position: relative; left: 67px;">
		<label for="telefone" class="labelCadastro">Telefone: </label>
		<br>
		<input type="tel" name="telefone" size="15" style="position: absolute; left: 68px;" placeholder="Ex: (00) 0000-0000">
		<br>		
		<label for="email" class="labelCadastro">E-mail: </label>
		<br>
		<input type="email" name="email" style="position: absolute; left: 68px;">
		<br>
		</div>
		<label class="labelCadastroEND">Endereço</label>
		<table border="0" cellspacing="0" cellpadding="0" style="position: relative; top: 25px;">
			<tr>
				<td>
					<label for="rua" class="cadastroTable">Rua: </label>
					<input name="rua" type="text" size="20"/>
					<br>
					<label for="num" class="cadastroTable">Número: </label>
					<input name="num" type="number" size="2"/>
					<br>
					<label for="cidade" class="cadastroTable">Cidade: </label>
					<input name="cidade" type="text" >
					<br>
					<label class="cadastroTable">Estado: 
						<select name="estado"> 	</label>
							<optgroup label="Selecione o Estado"> 
								<option value="ac">Acre</option> 
								<option value="al">Alagoas</option> 
								<option value="am">Amazonas</option> 
								<option value="ap">Amapá</option> 
								<option value="ba">Bahia</option> 
								<option value="ce">Ceará</option> 
								<option value="df">Distrito Federal</option> 
								<option value="es">Espírito Santo</option> 
								<option value="go">Goiás</option> 
								<option value="ma">Maranhão</option> 
								<option value="mt">Mato Grosso</option> 
								<option value="ms">Mato Grosso do Sul</option> 
								<option value="mg">Minas Gerais</option> 
								<option value="pa">Pará</option> 
								<option value="pb">Paraíba</option> 
								<option value="pr">Paraná</option> 
								<option value="pe">Pernambuco</option> 
								<option value="pi">Piauí</option> 
								<option value="rj">Rio de Janeiro</option> 
								<option value="rn">Rio Grande do Norte</option> 
								<option value="ro">Rondônia</option> 
								<option value="rs">Rio Grande do Sul</option> 
								<option value="rr">Roraima</option> 
								<option value="sc">Santa Catarina</option> 
								<option value="se">Sergipe</option> 
								<option value="sp">São Paulo</option> 
								<option value="to">Tocantins</option> 
								<option selected></option>
							</optgroup> 
						</select>
					<br>
					<label for="cep" class="cadastroTable">CEP: </label>
					<input name="cep" type="text" size="15" placeholder="Ex: 00000-000">
				</tr>
			</td>
		</table>
		
		<button class="buttonGravar" type="submit" name="enviar" value="Enviar" style=" background-color: lightgreen;  font-size: 20px;" >Gravar</button>
		<input class="buttonVoltar" type="button" value="Voltar" onClick="history.go(-1)" style=" background-color: lightblue;  font-size: 20px;"> 

	</form>
</body>
</html>
