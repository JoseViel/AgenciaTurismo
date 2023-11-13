<?php

$idPacote = $_GET['idPacote'];

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "select * from pacote where idPacote=?;";
$query = $pdo->prepare($sql);
$query->execute(array($idPacote));
$pacote = $query->fetch(PDO::FETCH_ASSOC);
Conexao::desconectar();

$pdo = Conexao::conectar();
$sql = "select * from destino order by id;";
$lstDestino = $pdo->query($sql);
Conexao::desconectar();

$pdo = Conexao::conectar();
$sql = "select * from passagem_aerea order by idPassagem;";
$lstPassagem = $pdo->query($sql);
Conexao::desconectar();

$pdo = Conexao::conectar();
$sql = "select * from hotel order by id;";
$lstHotel = $pdo->query($sql);
Conexao::desconectar();

$pdo = Conexao::conectar();
$sql = "select * from tipo_apartamento order by id;";
$lstApartamento = $pdo->query($sql);
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

    <title>Editar Pacote</title>
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
            <h3>Alterar Dados Do Pacote</h3>
        </div>
        <div class="row">
            <form action="edtPacote.php " method="POST" id="frmEdtPacote" class="col s12">
                <div class="input-field col s8">
                    <h3><label for="idPacote" class="black-text bold"><b>ID: <?php echo $idPacote; ?> </b></label> </h3>
                    <input type="hidden" name="idPacote" id="idPacote" value="<?php echo $idPacote; ?>">
                </div>
                <br>
                <div class="input-field col s6">
                    <label for="lblNome">Informe o Novo Nome do Pacote: </label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $pacote['nome']; ?>">
                </div>
                <div class="input-field col s6">
                    <label for="lblCpf">Informe a Nova Descrição do Pacote: </label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $pacote['descricao']; ?>">
                </div>
                <div class="input-field col s6">
                    <label for="lblEmail">Informe o Novo Valor do Pacote: </label>
                    <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $pacote['valor']; ?>">
                </div>
                <div class="input-field col s6">
                        <select class="browser-default" name="destino" value="destino" id="destino">
                        <i class="form-login__icon fas fa-usd"></i>
                            <?php foreach ($lstDestino as $destino){ ?>
                            <option value="<?php echo $destino['id']?>" name="destino" id="destino">
                            <?php echo $destino['Nome_Pais'] . " - " . $destino['Nome_Cidade']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-field col s6">
                        <select class="browser-default" name="passagem_aerea" value="passagem_aerea" id="passagem_aerea">
                            <?php foreach ($lstPassagem as $passagem){ ?>
                            <option value="<?php echo $passagem['idPassagem']?>" name="passagem_aerea" id="passagem_aerea">
                            <?php echo $passagem['data_ida'] . " - " . $passagem['data_volta']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-field col s6">
                        <select class="browser-default" name="hotel" value="hotel" id="hotel">
                            <?php foreach ($lstHotel as $hotel){ ?>
                            <option value="<?php echo $hotel['id']?>" name="hotel" id="hotel">
                            <?php echo $hotel['id'] . " - " . $hotel['nome']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-field col s6">
                        <?php foreach ($lstApartamento as $apartamento){ ?>
                        <select class="browser-default" name="apto" value="apto" id="apto">
                            <option value="<?php echo $apartamento['id']?>" name="apto" id="apto">
                            <?php echo $apartamento['id'] . " - " . $apartamento['nome']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
                    </div>
                <br>
                <div class="input-field col s8">
                    <button class="btn waves-effect waves-light green" type="submit" id="btnGravar">
                        Gravar <i class="material-icons">save</i>
                    </button>

                    <button class="btn waves-effect waves-light orange" type="reset" id="btnLimpar">
                        Limpar <i class="material-icons">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light indigo" type="button" id="btnVoltar" onclick="JavaScript:location.href='lstPacote.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>