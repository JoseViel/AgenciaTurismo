<?php 

    include 'conexao.php'; 

    $funcionario = trim($_POST['funcionario']);
    $cliente = trim($_POST['cliente']);
    $pacote = trim($_POST['pacote']);
    $status = trim($_POST['status']);
    $data_reserva = trim($_POST['data_reserva']);
    

    if (!empty($funcionario) && !empty($cliente) && !empty($pacote) && !empty($status) && !empty($data_reserva)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO reserva(funcionario, cliente, pacote, status, data_reserva) VALUES (?,?,?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($funcionario, $cliente, $pacote, $status, $data_reserva));
        Conexao::desconectar(); 
    }

    header("location:lstReserva.php");