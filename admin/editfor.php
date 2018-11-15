<?php 

include("classe/conexao.php");



$cod = $_GET['codigo'];


if (!empty($_GET['codigo']) && filter_var($_GET['codigo'], FILTER_VALIDATE_INT)){
    $select = $mysqli->query("SELECT * FROM FORNECEDOR WHERE FORNECEDOR_ID = '$cod';");
    if($select) {
        $row = $select->num_rows;
        $f = $select->fetch_assoc();
        if($row > 0) {
            $nome       = $f['FORNECEDOR_NOME'];
            $cnpj       = $f['FORNECEDOR_CNPJ'];
            $rua        = $f['FORNECEDOR_END'];
            $numero     = $f['FORNECEDOR_NUM_END'];
            $cidade     = $f['FORNECEDOR_END_CIDADE'];
            $uf         = $f['ESTADO_CODIGO'];
            $cep        = $f['FORNECEDOR_END_CEP'];
            $tel        = $f['FORNECEDOR_TELEFONE'];
            $email      = $f['FORNECEDOR_EMAIL'];
        }
    }
}

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clientes</title>

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
					<label for="nome" class="cadastroTable" >Nome:</label>
					<input name="nome" type="text" size="10"  value="<?php echo "$nome"; ?>"/>
					<br>
					<label for="cnpj" class="cadastroTable">CNPJ:</label>
					<input name="cnpj" type="text" size="20"  value="<?php echo "$cnpj"; ?>" />
					<br>
				</td>

			</tr>
		</table>
		<br>
		<div style="position: relative; left: 67px;">
		<label for="telefone" class="labelCadastro">Telefone: </label>
		<br>
		<input type="tel" name="telefone" size="15" style="position: absolute; left: 68px;" placeholder="Ex: (00) 0000-0000" 
		value="<?php echo "$tel"; ?>">
		<br>		
		<label for="email" class="labelCadastro">E-mail: </label>
		<br>
		<input type="email" name="email" style="position: absolute; left: 68px;" value="<?php echo "$email"; ?>"  
		value="<?php echo "$email"; ?>">
		<br>
		</div>
		<label class="labelCadastroEND">Endereço</label>
		<table border="0" cellspacing="0" cellpadding="0" style="position: relative; top: 25px;">
			<tr>
				<td>
					<label for="rua" class="cadastroTable">Rua: </label>
					<input name="rua" type="text" size="20"  value="<?php echo "$rua"; ?>"/>
					<br>
					<label for="num" class="cadastroTable">Número: </label>
					<input name="num" type="number" size="2"  value="<?php echo "$num"; ?>"/>
					<br>
					<label for="cidade" class="cadastroTable">Cidade: </label>
					<input name="cidade" type="text"  value="<?php echo "$cidade"; ?>">
					<br>
					<label class="cadastroTable">Estado: 
						<select name="estado"> 	</label>
							<optgroup label="Selecione o Estado"> 
								<option value="ac" <?php if($uf=='AC') echo "selected"; ?> >Acre</option> 
								<option value="al" <?php if($uf=='AL') echo "selected"; ?> >Alagoas</option> 
								<option value="am" <?php if($uf=='AM') echo "selected"; ?> >Amazonas</option> 
								<option value="ap" <?php if($uf=='AP') echo "selected"; ?> >Amapá</option> 
								<option value="ba" <?php if($uf=='BA') echo "selected"; ?> >Bahia</option> 
								<option value="ce" <?php if($uf=='CE') echo "selected"; ?> >Ceará</option> 
								<option value="df" <?php if($uf=='DF') echo "selected"; ?> >Distrito Federal</option> 
								<option value="es" <?php if($uf=='ES') echo "selected"; ?> >Espírito Santo</option> 
								<option value="go" <?php if($uf=='GO') echo "selected"; ?> >Goiás</option> 
								<option value="ma" <?php if($uf=='MA') echo "selected"; ?> >Maranhão</option> 
								<option value="mt" <?php if($uf=='MT') echo "selected"; ?> >Mato Grosso</option> 
								<option value="ms" <?php if($uf=='MS') echo "selected"; ?> >Mato Grosso do Sul</option> 
								<option value="mg" <?php if($uf=='MG') echo "selected"; ?> >Minas Gerais</option> 
								<option value="pa" <?php if($uf=='PA') echo "selected"; ?> >Pará</option> 
								<option value="pb" <?php if($uf=='PB') echo "selected"; ?> >Paraíba</option> 
								<option value="pr" <?php if($uf=='PR') echo "selected"; ?> >Paraná</option> 
								<option value="pe" <?php if($uf=='PE') echo "selected"; ?> >Pernambuco</option> 
								<option value="pi" <?php if($uf=='PI') echo "selected"; ?> >Piauí</option> 
								<option value="rj" <?php if($uf=='RJ') echo "selected"; ?> >Rio de Janeiro</option> 
								<option value="rn" <?php if($uf=='RN') echo "selected"; ?> >Rio Grande do Norte</option> 
								<option value="ro" <?php if($uf=='RO') echo "selected"; ?> >Rondônia</option> 
								<option value="rs" <?php if($uf=='RS') echo "selected"; ?> >Rio Grande do Sul</option> 
								<option value="rr" <?php if($uf=='RR') echo "selected"; ?> >Roraima</option> 
								<option value="sc" <?php if($uf=='SC') echo "selected"; ?> >Santa Catarina</option> 
								<option value="se" <?php if($uf=='SE') echo "selected"; ?> >Sergipe</option> 
								<option value="sp" <?php if($uf=='SP') echo "selected"; ?> >São Paulo</option> 
								<option value="to" <?php if($uf=='TO') echo "selected"; ?> >Tocantins</option> 
							</optgroup> 
						</select>
					<br>
					<label for="cep" class="cadastroTable">CEP: </label>
					<input name="cep" type="text" size="15" placeholder="Ex: 00000-000"  value="<?php echo "$cep"; ?>">
				</tr>
			</td>
		</table>
		
		<button class="buttonGravar" type="submit" name="enviar" value="Enviar" style=" background-color: lightgreen;  font-size: 20px;" >Gravar</button>
		<input class="buttonVoltar" type="button" value="Voltar" onClick="history.go(-1)" style=" background-color: lightblue;  font-size: 20px;"> 

	</form>


</body>
</html>
