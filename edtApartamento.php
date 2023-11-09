<?php 

    include 'conexao.php'; 

    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);
    $id = trim($_POST['id']);

    if (!empty($nome) && !empty($descricao) && !empty($id)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE tipo_apartamento SET nome=?,descricao=? WHERE id=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $descricao, $id));
        Conexao::desconectar(); 
    }

    header("location:lstApartamento.php");
