<?php


$con = new PDO("mysql:host=localhost;dbname=crud_leonardo;charset=utf8", "root", "");

$sql = $con->prepare("SELECT * FROM CLIENTE WHERE idCliente=?");
$sql->execute( array($_GET['id']) );

// devolve um registro
$cliente = $sql->fetchObject();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud-Leo</title>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="jquery.mask.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin|Pacifico|Source+Code+Pro" rel="stylesheet">


        <style>


        div.jumbotron.text-center {
            color: #0b0aff;
            background-color: #7fc0ff;
        }

        .container p {
            text-align: justify;
        }
            body{
                background-color: orange;
            }


    </style>


</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>CRUD - LEONARDO VON RANDOW</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <div class="collapse navbar-collapse" id="collapsibleNavbar" >
        <h4 style="color: white;">Alterar dados do Cliente: <?=$cliente->nome?><h4>
    </div>
</nav>

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-1" style="background-color:orange;"></div>
        <div class="col-sm-6" style="background-color:orange;">
            <br>
            <br>


            <form action="salvar.php" method="post">

                <input type="hidden" name="id" value="<?=$cliente->idCliente?>" >

                <div class="form-group">
                    <label for="sigla">NOME:</label>
                    <input type="text" class="form-control" name="nome" value="<?=$cliente->nome?>" required>
                </div>

                <div class="form-group">
                    <label for="nome">CPF:</label>
                    <input minlength="14" id="cpf" type="text" class="form-control" name="cpf" value="<?=$cliente->cpf?>" required>
                </div>

                <div class="form-group">
                    <label for="nome">E-MAIL:</label>
                    <input type="email" class="form-control" name="email" value="<?=$cliente->email?>" required>
                </div>

                <div class="form-group">
                    <label for="nome">TELEFONE:</label>
                    <input minlength="9" id="telefone" type="text" class="form-control" name="telefone" value="<?=$cliente->telefone?>" required>
                </div>

                <a class="btn btn-primary" href="../index.php">Voltar</a>
                <button class="btn btn-primary" type="submit">Salvar</button><br><br>

            </form>
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
<script>
 $(document).ready(function(){
        $('#telefone').mask('0000-0000');
        $('#cpf').mask('000.000.000-00');
    });

</script>