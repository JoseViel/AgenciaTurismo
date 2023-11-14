<?php

   $idPacote = trim($_GET['idPacote']);
   
   include 'conexao.php';
   
    if (!empty($idPacote)){
        $sql = "DELETE from pacote WHERE idPacote=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($idPacote));
        Conexao::desconectar(); 
    }

    header("location:lstPacote.php");