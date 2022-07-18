
<!DOCTYPEhtml>
<html>
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="jquery.mask.js"></script>
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

<div class="jumbotron text-center " style="margin-bottom:0">
    <h1>CRUD - LEONARDO VON RANDOW</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <div class="collapse navbar-collapse" id="collapsibleNavbar" >
        <h4 style="color: white;" >CADASTRAR NOVO CLIENTE<h4>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1" style="background-color:orange;"></div>
        <div class="col-sm-6" style="background-color:orange;">
            <br>
            <br>

                    <form action="inserir_cliente_back.php" method="post" >
                        <div class="form-group">
                            <label>NOME:</label><br>
                            <input type="text" class="form-control" name="nome"  required>
                        </div>
                        <div class="form-group">
                            <label>CPF:</label><br>
                            <input minlength="14" id="cpf" id="cpf" type="text" class="form-control" name="cpf" required>
                        </div>
                        <div class="form-group">
                            <label>E-MAIL:</label><br>
                            <input type="email" class="form-control" name="email"  required>
                        </div>
                        <div class="form-group">
                            <label>TELEFONE:</label><br>
                            <input minlength="9" id="telefone" type="text" class="form-control" name="telefone"  required>
                        </div>
                        <button type="submit" class="btn btn-primary">CADASTRAR</button><br><br>
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