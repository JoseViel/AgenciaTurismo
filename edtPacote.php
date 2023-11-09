<?php 

    include 'conexao.php'; 

    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']);
    $valor = trim($_POST['valor']);
    $destino = trim($_POST['destino']);
    $passagem_aerea = trim($_POST['passagem_aerea']);
    $hotel = trim($_POST['hotel']);
    $apto = trim($_POST['apto']);
    $idPacote = trim($_POST['idPacote']);

    if (!empty($nome) && !empty($descricao) && !empty($valor) && !empty($destino) && !empty($passagem_aerea) && !empty($hotel) && !empty($apto) && !empty($idPacote)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE pacote SET nome=?, descricao=?, valor=?, destino=?, passagem_aerea=?, hotel=?, apto=? WHERE idPacote=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $descricao, $valor, $destino, $passagem_aerea, $hotel, $apto, $idPacote));
        Conexao::desconectar(); 
    }

    header("location:lstPacote.php");
