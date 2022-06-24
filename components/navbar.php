<?php
    session_start();
    if (!isset($_SESSION['login']))
        Header("Location: ../index.html");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/font-awesome-regular-1/512/chess-king-256.png">
    <!-- <link rel="stylesheet" href="../styles/styles.css"> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <nav>
        <div class="nav-wrapper light-blue darken-4">
            <a href="#" class="brand-logo right"><img src="https://cdn-icons-png.flaticon.com/512/32/32457.png" width="65"></a>
             <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="../validations/logout.php">Logout</a></li>
                <li><a href="../pages/imagensChurch.php">Imagens</a></li>
                <li><a href="../pages/listaIgrejas.php">Igrejas</a></li>
                <li><a href="../pages/listaMembros.php">Membros</a></li>
                <li><a href="../pages/listaFamilias.php">Famílias</a></li>
                <li><a href="../pages/listaAtividades.php">Atividades</a></li>
                <li><a href="../components/menu.php">Início</a></li>
            </ul> 
        </div>
    </nav>
</body>

</html>                