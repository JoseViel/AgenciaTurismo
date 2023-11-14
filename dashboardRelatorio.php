<?php

session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("location: login.php");
} 

$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Dashboard Cadastros</title>
    <style>
      /* Seção principal dos Cards */
.principal{
    position: relative;
    width: 100%;
}

.principal-cima h1{
    color: #000000;
}

.dados-principais{
    display: flex;
    margin-top: 20px;
    color: #CBD0F7;
}

.dados-principais .card{
    width: 25%;
    margin: 20px;
    background: #181920;
    text-align: center;
    border-radius: 25px;
    padding: 25px;
    box-shadow: rgb(0, 0, 0, 0.1);
}

.dados-principais .card h3{
    margin: 15px;
    text-transform: capitalize;
    color: #CBD0F7;
    font-size: 18px;
}

.dados-principais .card p{
    font-size: 16px;
}

.dados-principais .card span{
    background: #ff9c01;
    color: aliceblue;
    padding: 10px 18px;
    border-radius: 10px;
    margin-top: 15px;
    cursor: pointer;
    margin-bottom: 20px;
    font-size: 14px;
}

.dados-principais .card span:hover{
    background: #ffd04e;
}

.dados-principais .card i{
    font-size: 22px;
    padding: 10px;
}  

    </style>
</head>
<body style="background-image: url('img/travel.png');
             background-repeat: none;
             background-position: center 0;
             background-size: auto;">
    <!-- menu suspenso -->
    <nav class="black">
        <div class="nav-wrapper">
            <a href="" class="brand-logo right"></a>
            <ul id="nav-mobile">
                <li><a href="choose.php">Home</a></li>
                <li><a href="lstCliente.php">Clientes</a></li>
                <li><a href="lstPacote.php">Pacotes</a></li>
                <li><a href="lstHotel.php">Hotéis</a></li>
                <li><a href="lstPassagem.php">Passagens Aéreas</a></li>
                <li><a href="lstDestino.php">Destinos</a></li>
                <li><a href="lstApartamento.php">Apartamentos</a></li>
                <li><a href="lstReserva.php">Reservas</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container"> 
        <section class="principal">
            <div class="principal-cima">
                <h1>Dashboard de Relatórios</h1>
            </div>
            <div class="dados-principais">
                <div class="card">
                    <i class="fas fa-user"></i>
                    <h3>Clientes</h3>
                    <span>Ver Mais</span>
                </div>
                <div class="card">
                    <i class="fas fa-handshake"></i>
                    <h3>Pacotes</h3>
                    <span>Ver Mais</span>
                </div>
                <div class="card">
                    <i class="fas fa-building"></i>
                    <h3>Hotéis</h3>
                    <span>Ver Mais</span>
                </div>
                <div class="card">
                    <i class="fas fa-plane"></i>
                    <h3>Passagens</h3>
                    <span>Ver Mais</span>
                </div>
            </div>
            <div class="dados-principais">
                <div class="card">
                    <i class="fa fa-globe"></i>
                    <h3>Destinos</h3>
                    <span>Ver Mais</span>
                </div>
                <div class="card">
                    <i class="fas fa-bed"></i>
                    <h3>Apartamentos</h3>
                    <span>Ver Mais</span>
                </div>
                <div class="card">
                    <i class="fas fa-address-book"></i>
                    <h3>Reservas</h3>
                    <span>Ver Mais</span>
                </div>
                <div class="card">
                    <i class="fas fa-user"></i>
                    <h3>Logout</h3>
                    <span>Ver Mais</span>
                </div>
            </div>
        </section>
    </div>
</body>
</html>