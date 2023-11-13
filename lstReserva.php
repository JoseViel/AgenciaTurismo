<?php

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "select * from reserva order by idReserva;";
$lstReserva = $pdo->query($sql);
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
    <link rel="icon" href="img/icone.png">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Lista de Reservas</title>
</head>

<body style="background-image: url('img/travel.png');
             background-repeat: none;
             background-position: center 0;
             background-size: auto;">

    <!-- menu suspenso -->
    <nav class="black">
        <div class="nav-wrapper">
            <a href="" class="brand-logo right"><img src="img/aviao-logo.png" width="60"></a>
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
        <div class="row">
            <div class="col s12">
                <h3 class="black-text text-lighten-3">
                    LISTA DE RESERVAS
                </h3>
                <a class="btn-floating btn-large waves-effect waves-light grey darken-1 accent-3" onclick="JavaScript:location.href='dashboardCadastro.php'">
                    <i class="material-icons">keyboard_backspace</i>
                </a>
                <a class="btn-floating btn-large waves-effect waves-light green" onclick="JavaScript:location.href='cadastroReserva.php'"><i class="material-icons">add</i></a>

                <div class="row">
                    <div class="input-field">
                        <form action="lstReserva.php" method="GET" id="frmBuscaReserva" class="col s12">
                            <div class="input-field col s12">

                                <input type="search" placeholder="Pesquisar" class="form-control col s6" id="pesquisar" name="pesquisar">
                                <button class="btn waves-effect waves-light col m1" type="submit" name="action" onclick="searchData()">
                                    <i class="material-icons right">search</i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="striped highlight blue-grey lighten-3 responsive-table">
                    <tr class="blue-grey darken-4 grey-text text-lighten-3">
                        <th>Id</th>
                        <th>Funcionário</th>
                        <th>Cliente</th>
                        <th>Pacote</th>
                        <th>Status</th>
                        <th>Data da Reserva</th>
                        <th>Editar</th>
                        <th>Remover</th>
                    </tr>
                    <?php
                    foreach ($lstReserva as $reserva) {
                    ?>
                        <tr>
                            <td><?php echo $reserva['idReserva']; ?></td>
                            <td><?php 
                                foreach($lstFuncionario as $funcionario){
                                if($funcionario['id'] == $reserva['funcionario']){
                                    echo $funcionario['nome'];
                                }
                             } ?></td>
                            <td><?php 
                                foreach($lstCliente as $cliente){
                                if($cliente['idCliente'] == $reserva['cliente']){
                                    echo $cliente['nome'];
                                }
                             } ?></td>
                             <td><?php 
                                foreach($lstPacote as $pacote){
                                if($pacote['idPacote'] == $reserva['pacote']){
                                    echo $pacote['nome'] . " - $" . $pacote['valor'];
                                }
                             } ?></td>
                            <td><?php echo $reserva['status']; ?></td>
                            <td><?php echo $reserva['data_reserva']; ?></td>
                            <td> <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='frmEdtReserva.php?idReserva=' +
                          <?php echo $reserva['idReserva']; ?>">
                                    <i class="material-icons">edit</i>
                            </td>
                            <td> <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $reserva['idReserva']; ?>)">
                                    <i class="material-icons">delete</i>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>

</body>

</html>

<script>
    function remover(idReserva) {
        if (confirm('Excluir a reserva ' + idReserva + '?')) {
            location.href = 'remReserva.php?idReserva=' + idReserva;
        }
    }

//function para pesquisar
    var search = document.getElementById('pesquisar');
//tecla enter
    search.addEventListener("keydown", function(event){
        if(event.key === "Enter"){
            searchData();
        }
    });

    function searchData (){
        window.location = 'lstReserva.php?search='+search.value;
    }
</script>