<?php 

    include 'conexao.php'; 

    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']); 
    $telefone = trim($_POST['telefone']);
    $senha = trim($_POST['senha']);
    $senha = md5($senha);

    if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($senha)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO admin(nome, email, telefone, senha) VALUES (?,?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $email, $telefone, $senha));
        Conexao::desconectar(); 
    }

    header("location:login.php");