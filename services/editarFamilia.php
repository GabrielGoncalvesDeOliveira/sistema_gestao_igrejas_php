<?php
    include '../database/conexao.php';

    $id = trim($_POST['id']);
    $nome = trim($_POST['txtNome']);

    if (!empty($id) && !empty($nome)) {
        $pdo = Conexao::conectar();

        $sql = "Select * from familia where nome = ?;";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome));
        $resultado = $query->fetch(PDO::FETCH_ASSOC);

        if (empty($resultado['nome'])) {
            $sql = "UPDATE familia set nome=? where id=?;";

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $query->execute(array($nome, $id));
        }
        Conexao::desconectar();
    }

    header("location:../pages/listaFamilias.php");
?>