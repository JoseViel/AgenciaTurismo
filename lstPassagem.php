<?php

include 'conexao.php';

$pdo = Conexao::conectar();
$sql = "select * from passagem_aerea order by idPassagem;";
$lstPassagem = $pdo->query($sql);
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
    <title>Lista de Passagens</title>
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
                    LISTA DE PASSAGENS AÉREAS
                </h3>
                <a class="btn-floating btn-large waves-effect waves-light grey darken-1 accent-3" onclick="JavaScript:location.href='dashboardCadastro.php'">
                    <i class="material-icons">keyboard_backspace</i>
                </a>
                <a class="btn-floating btn-large waves-effect waves-light green" onclick="JavaScript:location.href='cadastroPassagem.php'"><i class="material-icons">add</i></a>

                <div class="row">
                    <div class="input-field">
                        <form action="lstPassagem.php" method="GET" id="frmBuscaPassagens" class="col s12">
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
                        <th>Companhia</th>
                        <th>Data da Ida</th>
                        <th>Data da Volta</th>
                        <th>Embarque</th>
                        <th>Editar</th>
                        <th>Remover</th>
                    </tr>
                    <?php
                    foreach ($lstPassagem as $passagem) {
                    ?>
                        <tr>
                            <td><?php echo $passagem['idPassagem']; ?></td>
                            <td><?php echo $passagem['companhia']; ?></td>
                            <td><?php echo $passagem['data_ida']; ?></td>
                            <td><?php echo $passagem['data_volta']; ?></td>
                            <td><?php echo $passagem['embarque']; ?></td>
                            <td> <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='frmEdtPassagem.php?idPassagem=' +
                          <?php echo $passagem['idPassagem']; ?>">
                                    <i class="material-icons">edit</i>
                            </td>
                            <td> <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $passagem['idPassagem']; ?>)">
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
    function remover(idPassagem) {
        if (confirm('Excluir o passagem ' + idPassagem + '?')) {
            location.href = 'rempassagem.php?idPassagem=' + idPassagem;
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
        window.location = 'lstpassagem.php?search='+search.value;
    }
</script>