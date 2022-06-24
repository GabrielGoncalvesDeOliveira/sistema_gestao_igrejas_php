<?php
    include '../database/conexao.php';

    $id = trim($_POST['id']);
    $nome = trim($_POST['txtNome']);
    $email = trim($_POST['txtEmail']);
    $contato = trim($_POST['txtContato']);
    $dataNascimento = trim($_POST['txtDataNascimento']);
    $endereco = trim($_POST['txtEndereco']);
    $familia = trim($_POST['slcFamilia']);

    if (!empty($id) && !empty($nome) && !empty($email) && !empty($contato) && !empty($dataNascimento) && !empty($endereco) && !empty($familia)) {
        $sql = "UPDATE membro SET nome=?, email=?, contato=?, data_nascimento=?, endereco=?, familia=? where id = ?;";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $email, $contato, $dataNascimento, $endereco, $familia, $id));
        Conexao::desconectar();
    }

    header("location:../pages/listaMembros.php");
?>