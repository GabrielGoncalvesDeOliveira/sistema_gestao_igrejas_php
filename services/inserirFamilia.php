<?php
    include '../database/conexao.php';

    $nome = trim($_POST['txtNome']);

    if (!empty($nome)) {
        $pdo = Conexao::conectar();

        $sql = "Select * from familia where nome = ?;";
        $query = $pdo->prepare($sql);
        $query->execute(array($nome));
        $resultado = $query->fetch(PDO::FETCH_ASSOC);

        if (empty($resultado['nome'])) {
            
            $sql = "INSERT INTO familia(nome) VALUES(?);";
        
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $pdo->prepare($sql);
            $query->execute(array($nome));
        }
        Conexao::desconectar();
    }
    header("location:../pages/listaFamilias.php");
?>