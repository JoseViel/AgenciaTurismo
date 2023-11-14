<?php

include 'conexao.php';

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <title>Cadastro Reserva</title>
</head>
<body class="body-login">
    <div class="form-container">
        <div class="form-screen">
            <div class="form-screen__content">
                <form class="form-login" action="insReserva.php" method="POST">
                    <div class="form-login__field">
                        <select class="form-login__input" name="funcionario" value="funcionario" id="funcionario">
                            <option value="funcionario" disabled selected>Selecione o Funcionário</option>
                            <?php foreach ($lstFuncionario as $funcionario){ ?>
                            <option value="<?php echo $funcionario['id']?>" name="funcionario" id="funcionario">
                            <?php echo $funcionario['id'] . " - " . $funcionario['nome']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-login__field">
                        <select class="form-login__input" name="cliente" value="cliente" id="cliente">
                            <option value="cliente" disabled selected>Selecione o Cliente</option>
                            <?php foreach ($lstCliente as $cliente){ ?>
                            <option value="<?php echo $cliente['idCliente']?>" name="cliente" id="cliente">
                            <?php echo $cliente['idCliente'] . " - " . $cliente['nome']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-login__field">
                        <select class="form-login__input" name="pacote" value="pacote" id="pacote">
                            <option value="pacote" disabled selected>Selecione o Pacote</option>
                            <?php foreach ($lstPacote as $pacote){ ?>
                            <option value="<?php echo $pacote['idPacote']?>" name="pacote" id="pacote">
                            <?php echo $pacote['nome'] . " -  $" . $pacote['valor']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-login__field">
                        <i class="form-login__icon fa-solid fa-credit-card"></i>
                            <input type="text" class="form-login__input" name="status" id="status" placeholder="Status do Pagamento" required>
                    </div>
                    <div class="form-login__field">
                        <input type="date" class="form-login__input" name="data_reserva" id="data_reserva" placeholder="Data da Reserva" required>
                    </div>
                    <button class="form-button form-login__submit" type="submit" name="submit" id="submit">
                        <span class="form-button__text">Cadastrar</span>
                        <i class="form-button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                
            </div>
            <div class="form-screen__background">
                <span class="form-screen__background__shape form-screen__background__shape4"></span>
                <span class="form-screen__background__shape form-screen__background__shape3"></span>
                <span class="form-screen__background__shape form-screen__background__shape2"></span>
                <span class="form-screen__background__shape form-screen__background__shape1"></span>
            </div>
        </div>
    </div>
    
</body>
</html>