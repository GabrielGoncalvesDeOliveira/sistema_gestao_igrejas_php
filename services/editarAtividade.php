<?php
    include '../database/conexao.php';

    $id = trim($_POST['id']);
    $descricao = trim($_POST['txtDescricao']);
    $dataAtividade = trim($_POST['txtDataAtividade']);
    $hora = trim($_POST['txtHora']);
    $local = trim($_POST['txtLocal']);
    $mensagem = trim($_POST['txtMensagem']);

    if (!empty($id) && !empty($descricao) && !empty($dataAtividade) && !empty($hora) && !empty($local) && !empty($mensagem)) {
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE atividade set descricao=?, data_atividade=?, hora=?, local=?, mensagem=? where id=?;";
        $query = $pdo->prepare($sql);
        $query->execute(array($descricao, $dataAtividade, $hora, $local, $mensagem, $id));
    }
    Conexao::desconectar();

    header("location:../pages/listaAtividades.php");
?>