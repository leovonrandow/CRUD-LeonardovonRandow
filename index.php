<?php

$con = new PDO("mysql:host=localhost;dbname=crud_leonardo;charset=utf8", "root", "");
$sql = $con->prepare("SELECT * FROM CLIENTE ORDER BY nome");
$sql->execute();
$clientes = $sql->fetchAll(PDO::FETCH_CLASS);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD-Leo</title>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin|Pacifico|Source+Code+Pro" rel="stylesheet">

    <style>

        div.jumbotron.text-center {
            color: #0b0aff;
            background-color: #7fc0ff;
        }

        body{
            background-color: orange;
        }






    </style>
</head>


<div class="jumbotron text-center " style="margin-bottom:0">
    <h1>CRUD - LEONARDO VON RANDOW</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <div class="collapse navbar-collapse" id="collapsibleNavbar" >
        <h4 style="color: white;">CLIENTES<h4>
    </div>
</nav>

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-1" style="background-color:orange;"></div>
        <div class="col-sm-10" style="background-color:orange;">
            <br>
            <a class="btn btn-primary" style="float: right" href="inserir">INSERIR NOVO CLIENTE</a>
            <br>
            <br>
            <table class="table table-striped" border="6" >
                <tr style="background-color: #373737" >
                    <td style="color: white">NOME</td>
                    <td style="color: white">CPF</td>
                    <td style="color: white" >EMAIL</td>
                    <td style="color: white" >TELEFONE</td>
                    <td style="color: white" ></td>
                </tr>
                <?php
                foreach ($clientes AS $cliente) {
                    echo "<tr><td>$cliente->nome</td><td>$cliente->cpf</td><td>$cliente->email</td><td>$cliente->telefone</td>
                    <td>
                    <a class='btn btn-primary' href='alterar/?id=$cliente->idCliente'>ALTERAR</a>
                    <a class='btn btn-danger'  href='excluir/?id=$cliente->idCliente'>EXCLUIR</a>
                    </td>
                    </tr>";
                }
                ?>
            </table>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

        </div>
        <div class="col-sm-2" style="background-color:orange;"></div>
    </div>
</div>

</body>
</html>