<?php 

    include 'conexao.php'; 

    $pais = trim($_POST['pais']);
    $cidade = trim($_POST['cidade']);
    $id = trim($_POST['id']);

    if (!empty($pais) && !empty($cidade) && !empty($id)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE destino SET Nome_Pais=?,Nome_Cidade=? WHERE id=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($pais, $cidade, $id));
        Conexao::desconectar(); 
    }

    header("location:lstDestino.php");
