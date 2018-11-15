<?php

include("classe/conexao.php"); 

$consulta = ("SELECT CLIENTE_ID, CLIENTE_NOME FROM CLIENTE;");
$con = $mysqli->query($consulta) or die($mysqli->error);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head >
    <meta charset="utf-8" /> 
    <title>Clientes Cadastrados</title>

    <!--pacote Bootstrap responsive page-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<link href="css/estilo.css" rel="stylesheet" type="text/css" />
	<!--<link href="css/reset.css" rel="stylesheet" type="text/css">-->

</head>

<header ><!--Cabeçalho-->
	<div class="jumbotron text-center"  style=" height: 350px; ">
			<img src="Imagens/Hv2.png" width="100">
		 <h1 style="margin-top:-15px;" >			
			<label><span >Hass</span></label><b><span>Soluções</span></b>												
		</h1>
		<p style="font-size:25px">Serviços de informática e segurança</p> 
	</div>
</header><!--Fim do Cabeçalho-->

<body> 
    <a  href="cliente.php" style="color: black; position: relative; left: 70px; ">
        
             <button style=" background-color: lightgreen;  font-size: 18px;  ">
                 Cadastrar novo cliente
             </button>
       
        </a>
    <table border="2" style=" position: relative; left: 3%;  border-spacing: 5px; top: 20px; " id="tabela">
        <tr>
            <td>Nome</td>
            <td style="width:  200px">Ação</td>
        </tr>
        <?php while($dado = $con->fetch_array()) { ?>
        <tr>
            <td><?php echo $dado["CLIENTE_NOME"]; ?></td>
            <td >    
                <a href="editcli.php?codigo=<?php echo $dado["CLIENTE_ID"]; ?>"  style="color: black; ">
                    <button style="  background-color: lightblue; font-size: 18px; ">
                    Editar
                    </button>
                </a>
                <a href="cli_excluir.php?codigo=<?php echo $dado["CLIENTE_ID"]; ?>" style="color: black; ">
                    <button href="usu_editar.php?codigo=<?php echo $dado["CLIENTE_ID"]; ?>" style=" background-color: red; font-size: 18px; ">Excluir</button>
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>