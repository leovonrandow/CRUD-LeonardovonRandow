<?php
$con = new PDO("mysql:host=localhost;dbname=crud_leonardo;charset=utf8", "root", "");
$sql = $con->prepare("DELETE FROM CLIENTE WHERE idCliente=?");
$sql->execute( array( $_GET['id'] ) );

if ($sql->errorCode()==0) {
    echo "Registro excluido com sucesso.";
}else{
    echo "Ocorreu um erro: ".$sql->errorInfo()[2];
}

header("Location: ../index.php");