<?php
    include '../database/conexao.php';

    $nome = trim($_POST['txtNome']);
    $email = trim($_POST['txtEmail']);
    $contato = trim($_POST['txtContato']);
    $dataNascimento = trim($_POST['txtDataNascimento']);
    $endereco = trim($_POST['txtEndereco']);
    $idFamilia = trim($_POST['slcFamilia']);

    if (!empty($nome) && !empty($email) && !empty($contato) && !empty($dataNascimento) && !empty($endereco) && !empty($idFamilia)) {
        $pdo = Conexao::conectar();

        $sql = "Select * from membro where nome = ? and contato = ?;";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $contato));
        $resultado = $query->fetch(PDO::FETCH_ASSOC);

        if (empty($resultado['nome']) && empty($resultado['contato'])) {
            
            $sql = "INSERT INTO membro(nome, email, contato, data_nascimento, endereco, familia) VALUES (?, ?, ?, ?, ?, ?);";        

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $query->execute(array($nome, $email, $contato, $dataNascimento, $endereco, $idFamilia));

            $sql = "UPDATE familia set qtd_membros = qtd_membros + 1 where id = ?;";
            $query = $pdo->prepare($sql);
            $query->execute(array($idFamilia));
        }
        Conexao::desconectar();
    }
    header("location:../pages/listaMembros.php");
?>