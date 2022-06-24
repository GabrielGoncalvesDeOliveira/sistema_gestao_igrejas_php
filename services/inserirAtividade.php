<?php
    include '../database/conexao.php';

    echo 'Onde tudo começa...';

    $descricao = trim($_POST['txtDescricao']);
    $dataAtividade = trim($_POST['txtDataAtividade']);
    $hora = trim($_POST['txtHora']);
    $local = trim($_POST['txtLocal']);
    $mensagem = trim($_POST['txtMensagem']);

    if (!empty($descricao) && !empty($dataAtividade) && !empty($hora) && !empty($local) && !empty($mensagem)) {
        echo 'Chueguei no ifzao brabissimo';
        
        $pdo = Conexao::conectar();
        $sql = "INSERT INTO atividade(descricao, data_atividade, hora, local, mensagem) VALUES(?, ?, ?, ?, ?);";
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $query->execute(array($descricao, $dataAtividade, $hora, $local, $mensagem));

        echo 'PASSEIIII';

        Conexao::desconectar();
    }
    header("location:../pages/listaAtividades.php");
?>