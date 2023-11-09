<?php 

    include 'conexao.php'; 

    $companhia = trim($_POST['companhia']);
    $data_ida = trim($_POST['data_ida']);
    $data_volta = trim($_POST['data_volta']);
    $embarque = trim($_POST['embarque']);
    $idPassagem = trim($_POST['idPassagem']);

    if (!empty($companhia) && !empty($data_ida) && !empty($data_volta) && !empty($embarque) && !empty($idPassagem)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE passagem_aerea SET companhia=?, data_ida=?, data_volta=?, embarque=? WHERE idPassagem=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($companhia, $data_ida, $data_volta, $embarque, $idPassagem));
        Conexao::desconectar(); 
    }

    header("location:lstPassagem.php");

    $sql = "UPDATE pacote SET nome=?, descricao=?, valor=?, destino=?, passagem_aerea=?, hotel=?, apto=? WHERE idPacote=?"; 