<?php

$id = $_GET['id'];

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "select * from tipo_apartamento where id=?;";
$query = $pdo->prepare($sql);
$query->execute(array($id));
$apartamento = $query->fetch(PDO::FETCH_ASSOC);
Conexao::desconectar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icone.png">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Editar Apartamento</title>
</head>

<body style="background-color: #1b1f27;;">

    <!-- menu suspenso -->
    <nav class="black">
        <div class="nav-wrapper">
            <a href="" class="brand-logo right"><img src="img/icone.png" width="60"></a>
        </div>
    </nav>

    <div class="container white lighten-4 col s12">
    <div class="black white-text lighten-4 col s12">
            <h3>Alterar Dados Do Apartamento</h3>
        </div>
        <div class="row">
            <form action="edtApartamento.php " method="POST" id="frmEdtApartamento" class="col s12">
                <div class="input-field col s8">
                    <h3><label for="id" class="black-text bold"><b>ID: <?php echo $id; ?> </b></label> </h3>
                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                </div>
                <br>
                <div class="input-field col s5">
                    <label for="lblNome">Informe o Novo Nome do Apartamento: </label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $apartamento['nome']; ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblCpf">Informe a Nova Descrição do Apartamento: </label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $apartamento['descricao']; ?>">
                </div>
                <br>
                <div class="input-field col s8">
                    <button class="btn waves-effect waves-light green" type="submit" id="btnGravar">
                        Gravar <i class="material-icons">save</i>
                    </button>

                    <button class="btn waves-effect waves-light orange" type="reset" id="btnLimpar">
                        Limpar <i class="material-icons">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light indigo" type="button" id="btnVoltar" onclick="JavaScript:location.href='lstApartamento.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>