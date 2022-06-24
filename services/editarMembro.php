<?php
    include '../database/conexao.php';

    $idMembro = trim($_POST['id_membro']);
    $nome = trim($_POST['txtNome']);
    $email = trim($_POST['txtEmail']);
    $contato = trim($_POST['txtContato']);
    $dataNascimento = trim($_POST['txtDataNascimento']);
    $endereco = trim($_POST['txtEndereco']);
    $familia = trim($_POST['txtFamilia']);

    if (!empty($idMembro) && !empty($nome) && !empty($email) && !empty($contato) && !empty($dataNascimento) && !empty($endereco) && !empty($familia)) {
        $sql = "UPDATE membro SET nome=?, email=?, contato=?, data_nascimento=?, endereco=?, familia=? where id_membro = ?;";
    
        echo 'To no if da edicao';

        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $email, $contato, $dataNascimento, $endereco, $familia, $idMembro));
        Conexao::desconectar();

        echo 'cheguei depois da edicao';
    }

    header("location:../pages/listaMembros.php");
?>