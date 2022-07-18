<?php
$con = new PDO("mysql:host=localhost;dbname=crud_leonardo;charset=utf8", "root", "");
$sql = $con->prepare("UPDATE CLIENTE SET nome=?, cpf=?, email = ?, telefone=? WHERE idCliente=?");
$sql->execute( array( $_POST['nome'],  $_POST['cpf'] , $_POST['email'], $_POST['telefone'], $_POST['id'], ) );


echo $_POST['nome'];
echo "<br>";
echo $_POST['cpf'];
echo "<br>";
echo $_POST['email'];
echo "<br>";
echo $_POST['telefone'];
echo "<br>";
// verifica se ocorreu um erro
if ($sql->errorCode()==0) {
    echo "Registro alterado com sucesso.";
}else{
    echo "Ocorreu um erro: ".$sql->errorInfo()[2];
}
header("Location: ../index.php");



