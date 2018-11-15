<?php

include("classe/conexao.php"); 

  $usu      = $_POST['usu'];
  $senha    = $_POST['senha'];

    $select = $mysqli->query("SELECT * FROM usuarios WHERE login = '$usu' AND senha = '$senha'") ;
    if($select) {
        $row = $select->num_rows;
        $f = $select->fetch_assoc();
        if($row > 0) {
          setcookie("login",$login);
          header("Location:menu.html");
        } else {
          echo "<div align='center'><h1>Usu&aacute;rio e/ou senha inv&aacute;lido(s)!</h1></div>"; 
          echo "<meta http-equiv='refresh' content='2;URL=http://localhost/hass/'>"; 
 
        }
    }
  

?>