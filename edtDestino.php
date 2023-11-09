<?php 

    include 'conexao.php'; 

    $nome_pais = trim($_POST['nome_pais']);
    $nome_cidade = trim($_POST['nome_cidade']);
    $id = trim($_POST['id']);

    if (!empty($nome_pais) && !empty($nome_cidade) && !empty($id)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE destino SET nome_pais=?,nome_cidade=? WHERE id=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome_pais, $nome_cidade, $id));
        Conexao::desconectar(); 
    }

    header("location:lstDestino.php");
