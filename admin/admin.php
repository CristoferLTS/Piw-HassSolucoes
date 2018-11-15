<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hass Soluções</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--pacote Bootstrap responsive page-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<link href="css/estilologin.css" rel="stylesheet" type="text/css" />
	<!--<link href="css/reset.css" rel="stylesheet" type="text/css">-->
</head>
<header ><!--Cabeçalho-->


	<div class="jumbotron text-center"  style=" height: 350px; ">
			<img src="Imagens/Hv2.png" width="100">
		 <h1 style="margin-top:-15px;" >			
			<label><span >Hass </span> </label> <b><span>Soluções</span></b>												
		</h1>
		<p style="font-size:25px">Serviços de informática e segurança</p> 
	</div>
</header><!--Fim do Cabeçalho-->
<body>
<center>
	<h2>Acessar</h2>
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</center>

<div id="id01" class="modal" >
  
  <form  method="POST" class="modal-content animate" action="login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="Imagens/login.jpg" alt="Avatar" class="avatar" style="width:70px" >
    </div>
    

    <div class="container" style="background-color:#f1f1f1; width: 80%;">
    	<div class="container">
      <label for="usu"><b>Usuário: </b></label>
      <br>
      <input type="text" placeholder="Insira o usuário" name="usu" style="width: 70%;" required>
      <br>
      <label for="senha"><b>Senha: </b></label>
      <br>
      <input type="password" placeholder="Insira a senha" name="senha"   style="width: 70%;" required>
      <br> 
    </div>
     <center> 
 		<button type="submit" style="width: 12%;" value="entrar" id="entrar" name="entrar">Login</button>
     	<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" >Cancelar</button> </center>
    </div>
  </form>
</div>
<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>

</html>