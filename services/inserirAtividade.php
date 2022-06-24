<?php
    include '../database/conexao.php';

    $descricao trim($_POST['txtDescricao']);
    $dataAtividade trim($_POST['txtDataAtividade']);
    $hora trim($_POST['txtHora']);
    $local trim($_POST['txtLocal']);
    $mensagem trim($_POST['txtMensagem']);

    if (!empty($descricao) && !empty($dataAtividade) && !empty($hora) && !empty($local) && !empty($mensagem)) {
        $pdo = Conexao::conectar();

        $sql = "Select * from atividade where descricao = ?;";
        $query = $pdo->prepare($sql);
        $query->execute(array($descricao));
        $resultado = $query->fetch(PDO::FETCH_ASSOC);

        if (empty($resultado['nome'])) {
            
            $sql = "INSERT INTO familia(descricao, data_atividade, hora, local, mensagem) VALUES(?, ?, ?, ?, ?);";
        
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $query->execute(array($descricao, $dataAtividade, $hora, $local, $mensagem));
        }
        Conexao::desconectar();
    }
    header("location:../pages/listaAtividades.php");
?>