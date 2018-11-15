<?php 

include("classe/conexao.php");



$cod = $_GET['codigo'];


if (!empty($_GET['codigo']) && filter_var($_GET['codigo'], FILTER_VALIDATE_INT)){
    $select = $mysqli->query("DELETE FROM CLIENTE WHERE CLIENTE_ID = '$cod';");
    


echo "Exclusão realizada!";
echo "<a href='listarclientes.php'><br>Retornar ao Menu</a><br>";

}