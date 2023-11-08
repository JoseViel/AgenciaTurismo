<?php 

    include 'conexao.php'; 

    $nome = trim($_POST['nome']);
    $cpf = trim($_POST['cpf']);
    $email = trim($_POST['email']); 
    $telefone = trim($_POST['telefone']);
    $endereco = trim($_POST['endereco']);
    $idCliente = trim($_POST['idCliente']);

    if (!empty($nome) && !empty($cpf) && !empty($email) && !empty($telefone) && !empty($endereco) && !empty($idCliente)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE cliente SET nome=?,cpf=?,email=?,telefone=?,endereco=? WHERE idCliente=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $cpf, $email, $telefone, $endereco, $idCliente));
        Conexao::desconectar(); 
    }

    header("location:lstCliente.php");