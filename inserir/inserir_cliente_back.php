<?php

$con = new PDO("mysql:host=localhost;dbname=crud_leonardo;charset=utf8", "root", "");
$sql = $con->prepare("INSERT INTO CLIENTE (nome, cpf, email, telefone ) VALUES (?, ?, ?, ?)");
$sql->execute( array( $_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['telefone']) );


if ( $sql->errorCode()==0){
    echo "Registro inserido com sucesso";
}else{
    echo "Erro ao inserir: ". $sql->errorInfo()[2];}

    header("Location: ../index.php");