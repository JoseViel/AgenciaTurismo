<?php 

    include 'conexao.php'; 

    $funcionario = trim($_POST['funcionario']);
    $cliente = trim($_POST['cliente']);
    $pacote = trim($_POST['pacote']);
    $status = trim($_POST['status']);
    $data_reserva = trim($_POST['data_reserva']);
    $idReserva = trim($_POST['idReserva']);
    

    if (!empty($funcionario) && !empty($cliente) && !empty($pacote) && !empty($status) && !empty($data_reserva) && !empty($idReserva)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE reserva SET funcionario=?, cliente=?, pacote=?, status=?, data_reserva=? WHERE idReserva=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($funcionario, $cliente, $pacote, $status, $data_reserva, $idReserva));
        Conexao::desconectar(); 
    }

    header("location:lstReserva.php");
