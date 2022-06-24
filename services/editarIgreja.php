<?php
    include '../database/conexao.php';

    $id = trim($_POST['id']);
    $denominacao = trim($_POST['txtDenominacao']);
    $endereco = trim($_POST['txtEndereco']);
    $contato = trim($_POST['txtContato']);

    if (!empty($id) && !empty($denominacao) && !empty($endereco) && !empty($contato)) {
        $sql = "UPDATE igreja SET denominacao=?, endereco=?, contato=? where id = ?;";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $query->execute(array($denominacao, $endereco, $contato, $id));
        Conexao::desconectar();
    }

    header("location:../pages/listaIgrejas.php");
?>