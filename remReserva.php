<?php

   $idReserva = trim($_GET['idReserva']); 
   
   include 'conexao.php';
   
    if (!empty($idReserva) ){
        $sql = "DELETE from reserva WHERE idReserva=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($idReserva));
        Conexao::desconectar(); 
    }

    header("location:lstReserva.php");