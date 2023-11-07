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
    <link rel="stylesheet" type="text/css" href="style-dashaboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose</title>

    <style>
        body {
            background-image: url('img/visto.avif');
        }
        .area-login{
            display: flex;
            height: 85vh;
            justify-content: center;
            align-items: center;
        }
        .choose{
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #575656;
            width: 360px;
            height: 280px;
            padding: 35px;
            border-radius: 10px;
        }

        .choose form{
            display:flex;
            width: 80%;
            flex-direction: column;
        }

        p{
            color: #cbd0f7;    
        }

        a{
            color: #5568fe;
            text-decoration: none;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <section class="area-login">
        <div class="choose">
            <p style="font-weight: bold;
            color: rgb(199, 162, 58);">
            ESCOLHA A AÇÃO DESEJADA:</p>
            <form method="POST">
                <a style="margin-top: 12px;
                    background-color: rgb(107, 107, 100);
                    border-radius: 8px;
                    color: rgb(199, 162, 58);
                    padding-left: 40%;
                    padding-top: 15px;
                    height: 35px;
                    font-weight: bold;" href="dashboardCadastro.php">Cadastros</a>
                <a style="margin-top: 12px;
                    background-color: rgb(107, 107, 100);
                    border-radius: 8px;
                    color: rgb(199, 162, 58);
                    padding-left: 40%;
                    padding-top: 15px;
                    height: 35px;
                    font-weight: bold;" href="dashboardRelatorio.php">Relatórios</a>
                <a style="margin-top: 12px;
                    background-color: rgb(107, 107, 100);
                    border-radius: 8px;
                    color: rgb(199, 162, 58);
                    padding-left: 42%;
                    padding-top: 15px;
                    height: 35px;
                    font-weight: bold;" href="logout.php">Logout</a>
            </form>
        </div>
    </section>
</body>

</html>