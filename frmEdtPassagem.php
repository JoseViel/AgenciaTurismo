<?php

$idPassagem = $_GET['idPassagem'];

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "select * from passagem_aerea where idPassagem=?;";
$query = $pdo->prepare($sql);
$query->execute(array($idPassagem));
$passagem = $query->fetch(PDO::FETCH_ASSOC);
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

    <title>Editar Passagem</title>
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
            <h3>Alterar Dados Do Passagem</h3>
        </div>
        <div class="row">
            <form action="edtPassagem.php " method="POST" id="frmEdtPassagem" class="col s12">
                <div class="input-field col s8">
                    <h3><label for="idPassagem" class="black-text bold"><b>ID: <?php echo $idPassagem; ?> </b></label> </h3>
                    <input type="hidden" name="idPassagem" id="idPassagem" value="<?php echo $idPassagem; ?>">
                </div>
                <br>
                <div class="input-field col s5">
                    <label for="lblcompanhia">Informe o Novo Companhia da Passagem: </label>
                    <input type="text" class="form-control" id="companhia" name="companhia" value="<?php echo $passagem['companhia']; ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lbldata_ida">Informe a Nova Data de Ida da Passagem: </label>
                    <input type="text" class="form-control" id="data_ida" name="data_ida" value="<?php echo $passagem['data_ida']; ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lbldata_volta">Informe a Nova Data de Volta da Passagem: </label>
                    <input type="text" class="form-control" id="data_volta" name="data_volta" value="<?php echo $passagem['data_volta']; ?>">
                </div>
                <div class="input-field col s5">
                    <label for="lblembarque">Informe o Novo Embarque da Passagem: </label>
                    <input type="text" class="form-control" id="embarque" name="embarque" value="<?php echo $passagem['embarque']; ?>">
                </div>
                <br>
                <div class="input-field col s8">
                    <button class="btn waves-effect waves-light green" type="submit" id="btnGravar">
                        Gravar <i class="material-icons">save</i>
                    </button>

                    <button class="btn waves-effect waves-light orange" type="reset" id="btnLimpar">
                        Limpar <i class="material-icons">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light indigo" type="button" id="btnVoltar" onclick="JavaScript:location.href='lstPassagem.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>