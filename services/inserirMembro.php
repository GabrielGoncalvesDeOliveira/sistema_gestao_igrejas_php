<?php
    include '../database/conexao.php';

    $nome = trim($_POST['txtNome']);
    $email = trim($_POST['txtEmail']);
    $contato = trim($_POST['txtContato']);
    $dataNascimento = trim($_POST['txtDataNascimento']);
    $endereco = trim($_POST['txtEndereco']);
    $familia = trim($_POST['txtFamilia']);

    if (!empty($nome) && !empty($email) && !empty($contato) && !empty($dataNascimento) && !empty($endereco) && !empty($familia)) {
        $sql = "INSERT INTO membro(nome, email, contato, data_nascimento, endereco, familia) VALUES (?, ?, ?, ?, ?, ?);";        

        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $email, $contato, $dataNascimento, $endereco, $familia));
        
        echo 'to no criar do inserir membro';

        $sql = "UPDATE familia set qtd_membros = qtd_membros + 1 where id_familia = ?;";
        $query = $pdo->prepare($sql);
        $query->execute(array($familia));

        Conexao::desconectar();
    }
    header("location:../pages/listaMembros.php");
?>