<?php 

    include 'conexao.php'; 

    $nome_pais = trim($_POST['nome_pais']);
    $nome_cidade = trim($_POST['nome_cidade']);

    if (!empty($nome_pais) && !empty($nome_cidade)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO destino(nome_pais, nome_cidade) VALUES (?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome_pais, $nome_cidade));
        Conexao::desconectar(); 
    }

    header("location:lstDestino.php");