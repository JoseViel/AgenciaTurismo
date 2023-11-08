<?php 

    include 'conexao.php'; 

    $nome = trim($_POST['nome']);
    $cpf = trim($_POST['cpf']);
    $email = trim($_POST['email']); 
    $telefone = trim($_POST['telefone']);
    $endereco = trim($_POST['endereco']);

    if (!empty($nome) && !empty($cpf) && !empty($email) && !empty($telefone) && !empty($endereco)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO cliente(nome, cpf, email, telefone, endereco) VALUES (?,?,?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $cpf, $email, $telefone, $endereco));
        Conexao::desconectar(); 
    }

    header("location:lstCliente.php");