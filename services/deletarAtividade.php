<?php
    $id = trim($_GET['id']);

    include '../database/conexao.php';

    if (!empty($id)) {
        $sql = "DELETE from atividade WHERE id = ?;";
    
        $pdo = Conexao::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        Conexao::desconectar();
    }

    header("location:../pages/listaAtividades.php");
?>