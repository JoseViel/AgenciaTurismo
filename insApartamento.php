<?php 

    include 'conexao.php'; 

    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);

    if (!empty($nome) && !empty($descricao)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO tipo_apartamento(nome, descricao) VALUES (?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $descricao));
        Conexao::desconectar(); 
    }

    header("location:lstApartamento.php");