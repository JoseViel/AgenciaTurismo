<?php

$idReserva = $_GET['idReserva'];

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "select * from reserva where idReserva=?;";
$query = $pdo->prepare($sql);
$query->execute(array($idReserva));
$reserva = $query->fetch(PDO::FETCH_ASSOC);
Conexao::desconectar();

$pdo = Conexao::conectar();
$sql = "select * from admin order by id;";
$lstFuncionario = $pdo->query($sql);
Conexao::desconectar();

$pdo = Conexao::conectar();
$sql = "select * from cliente order by idCliente;";
$lstCliente = $pdo->query($sql);
Conexao::desconectar();

$pdo = Conexao::conectar();
$sql = "select * from pacote order by idPacote;";
$lstPacote = $pdo->query($sql);
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

    <title>Editar Reserva</title>
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
            <h3>Alterar Dados Do Reserva</h3>
        </div>
        <div class="row">
            <form action="edtReserva.php " method="POST" id="frmEdtReserva" class="col s12">
                <div class="input-field col s8">
                    <h3><label for="idReserva" class="black-text bold"><b>ID: <?php echo $idReserva; ?> </b></label> </h3>
                    <input type="hidden" name="idReserva" id="idReserva" value="<?php echo $idReserva; ?>">
                </div>
                <br>
                <div class="input-field col s6">
                        <select class="browser-default" name="funcionario" value="funcionario" id="funcionario">
                        <i class="form-login__icon fas fa-usd"></i>
                            <?php foreach ($lstFuncionario as $funcionario){ ?>
                            <option value="<?php echo $funcionario['id']?>" name="funcionario" id="funcionario">
                            <?php echo $funcionario['id'] . " - " . $funcionario['nome']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-field col s6">
                        <select class="browser-default" name="cliente" value="cliente" id="cliente">
                            <?php foreach ($lstCliente as $cliente){ ?>
                            <option value="<?php echo $cliente['idCliente']?>" name="cliente" id="cliente">
                            <?php echo $cliente['idCliente'] . " - " . $cliente['nome']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-field col s6">
                        <select class="browser-default" name="pacote" value="pacote" id="pacote">
                            <?php foreach ($lstPacote as $pacote){ ?>
                            <option value="<?php echo $pacote['idPacote']?>" name="pacote" id="pacote">
                            <?php echo $pacote['idPacote'] . " - " . $pacote['nome']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-field col s6">
                        <label for="lblCpf">Informe a Nova Descrição da Reserva: </label>
                        <input type="text" class="form-control" id="status" name="status" value="<?php echo $reserva['status']; ?>">
                    </div>
                    <div class="input-field col s6">
                        <label for="lblEmail">Informe a Nova Data da Reserva: </label>
                        <input type="date" class="form-control" id="data_reserva" name="data_reserva" value="<?php echo $reserva['data_reserva']; ?>">
                    </div>
                <br>
                <div class="input-field col s8">
                    <button class="btn waves-effect waves-light green" type="submit" id="btnGravar">
                        Gravar <i class="material-icons">save</i>
                    </button>

                    <button class="btn waves-effect waves-light orange" type="reset" id="btnLimpar">
                        Limpar <i class="material-icons">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light indigo" type="button" id="btnVoltar" onclick="JavaScript:location.href='lstReserva.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>