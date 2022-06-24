<?php
    include '../database/conexao.php';

    $denominacao = trim($_POST['txtDenominacao']);
    $endereco = trim($_POST['txtEndereco']);
    $contato = trim($_POST['txtContato']);

    if (!empty($denominacao) && !empty($endereco) && !empty($contato)) {
        $pdo = Conexao::conectar();
        
        $sql = "Select * from igreja where denominacao = ?;";
        $query = $pdo->prepare($sql);
        $query->execute(array($denominacao));
        $resultado = $query->fetch(PDO::FETCH_ASSOC);

        if (empty($resultado['denominacao'])) {

            $sql = "INSERT INTO igreja(denominacao, endereco, contato) VALUES(?, ?, ?);";
            
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $query->execute(array($denominacao, $endereco, $contato));

            Conexao::desconectar();
        }
    }
    header("location:../pages/listaIgrejas.php");
?>