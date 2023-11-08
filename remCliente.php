<?php

   $idCliente = trim($_GET['idCliente']); 
   
   include 'conexao.php';
   
    if (!empty($idCliente) ){
        $sql = "DELETE from cliente WHERE idCliente=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($idCliente));
        Conexao::desconectar(); 
    }

    header("location:lstCliente.php");