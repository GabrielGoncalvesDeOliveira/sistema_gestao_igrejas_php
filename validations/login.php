<?php
    $login = trim($_POST['user'])
    $password = trim($_POST['password']);

    include 'database/conexao.php';
    
    $sql = "select * from usuario where login like ?";
    $pdo = Conexao::conectar();
    $query = $pdo->prepare($sql);
    $query->execute(array($login));
    $dados = $query->fetch(PDO::FETCH_ASSOC);

    Conexao::desconectar();

    if (md5($password) == $dados['password']) {
        session_start();
        $_SESSION['login'] = $dados['login'];
        $_SESSION['password'] = $dados['password'];
        header("location:menu.php");
    } 
    else header("location:index.html");
?>