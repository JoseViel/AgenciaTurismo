<?php

include 'conexao.php';

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <title>Cadastro Destino</title>
</head>
<body class="body-login">
    <div class="form-container">
        <div class="form-screen">
            <div class="form-screen__content">
                <form class="form-login" action="insPacote.php" method="POST">
                    <div class="form-login__field">
                        <i class="form-login__icon fas fa-user"></i>
                            <input type="text" class="form-login__input" name="nome" id="nome" placeholder="Nome" required>
                    </div>
                    <div class="form-login__field">
                        <i class="form-login__icon fas fa-address-card"></i>
                            <input type="text" class="form-login__input" name="descricao" id="descricao" placeholder="Descrição" required>
                    </div>
                    <div class="form-login__field">
                        <i class="form-login__icon fas fa-usd"></i>
                            <input type="text" class="form-login__input" name="valor" id="valor" placeholder="Valor" required>
                    </div>
                    <div class="form-login__field">
                        <select class="form-login__input" name="destino" value="destino" id="destino">
                        <i class="form-login__icon fas fa-usd"></i>
                            <option value="destino" disabled selected>Selecione o Destino</option>
                            <?php foreach ($lstDestino as $destino){ ?>
                            <option value="<?php echo $destino['id']?>" name="destino" id="destino">
                            <?php echo $destino['Nome_Pais'] . " - " . $destino['Nome_Cidade']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-login__field">
                        <select class="form-login__input" name="passagem_aerea" value="passagem_aerea" id="passagem_aerea">
                            <option value="passagem_aerea" disabled selected>Selecione a Data</option>
                            <?php foreach ($lstPassagem as $passagem){ ?>
                            <option value="<?php echo $passagem['idPassagem']?>" name="passagem_aerea" id="passagem_aerea">
                            <?php echo $passagem['data_ida'] . " - " . $passagem['data_volta']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-login__field">
                        <select class="form-login__input" name="hotel" value="hotel" id="hotel">
                            <option value="hotel" disabled selected>Selecione o Hotel</option>
                            <?php foreach ($lstHotel as $hotel){ ?>
                            <option value="<?php echo $hotel['id']?>" name="hotel" id="hotel">
                            <?php echo $hotel['id'] . " - " . $hotel['nome']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-login__field">
                        <select class="form-login__input" name="apto" value="apto" id="apto">
                            <option value="apto" disabled selected>Selecione o</option>
                            <?php foreach ($lstApartamento as $apartamento){ ?>
                            <option value="<?php echo $apartamento['id']?>" name="apto" id="apto">
                            <?php echo $apartamento['id'] . " - " . $apartamento['nome']?>
                        </option>
                        <?php
                            }
                            ?>
                        </select>
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