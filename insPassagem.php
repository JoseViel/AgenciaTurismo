<?php 

    include 'conexao.php'; 

    $companhia = trim($_POST['companhia']);
    $data_ida = trim($_POST['data_ida']);
    $data_volta = trim($_POST['data_volta']);
    $embarque = trim($_POST['embarque']);

    if (!empty($companhia) && !empty($data_ida) && !empty($data_volta) && !empty($embarque)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO passagem_aerea(companhia, data_ida, data_volta, embarque) VALUES (?,?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($companhia, $data_ida, $data_volta, $embarque));
        Conexao::desconectar(); 
    }

    header("location:lstPassagem.php");