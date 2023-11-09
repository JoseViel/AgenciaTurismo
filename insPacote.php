<?php 

    include 'conexao.php'; 

    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);
    $valor = trim($_POST['valor']);
    $destino = trim($_POST['destino']);
    $passagem_aerea = trim($_POST['passagem_aerea']);
    $hotel = trim($_POST['hotel']);
    $apto = trim($_POST['apto']);

    if (!empty($nome) && !empty($descricao) && !empty($valor) && !empty($destino) && !empty($passagem_aerea) && !empty($hotel) && !empty($apto)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO pacote(nome, descricao, valor, destino, passagem_aerea, hotel, apto) VALUES (?,?,?,?,?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $descricao, $valor, $destino, $passagem_aerea, $hotel, $apto));
        Conexao::desconectar(); 
    }

    header("location:lstPacote.php");