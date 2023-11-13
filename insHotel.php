<?php 

    include 'conexao.php'; 

    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);
    $endereco = trim($_POST['endereco']);
    $classificacao = trim($_POST['classificacao']);

    if (!empty($nome) && !empty($descricao) && !empty($endereco) && !empty($classificacao)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO hotel(nome, descricao, endereco, classificacao) VALUES (?,?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $descricao, $endereco, $classificacao));
        Conexao::desconectar(); 
    }

    header("location:lstHotel.php");