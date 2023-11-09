<?php 

    include 'conexao.php'; 

    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);
    $id = trim($_POST['id']);

    if (!empty($nome) && !empty($descricao) && !empty($id)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO tipo_apartamento(nome, descricao, id) VALUES (?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $descricao, $id));
        Conexao::desconectar(); 
    }

    header("location:lstApartamento.php");