<?php
    session_start();
    if (!isset($_SESSION['login']))
        Header("Location: index.html");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>ChurchWeOn</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper light-blue darken-4">
            <a href="#" class="brand-logo right"><img src="./imagens/casai.png" width="120"></a>
            <!-- <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="lstImovel.php">Imóveis</a></li>
                <li><a href="frmInsImovel.php">Inserir Imóvel</a></li>
                <li><a href="logout.php">Logout</a></li> 
            </ul> -->

        </div>
    </nav>
</body>

</html>