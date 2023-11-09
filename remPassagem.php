<?php

   $idPassagem = trim($_GET['idPassagem']); 
   
   include 'conexao.php';
   
    if (!empty($idPassagem) ){
        $sql = "DELETE from passagem_aerea WHERE idPassagem=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($idPassagem));
        Conexao::desconectar(); 
    }

    header("location:lstPassagem.php");