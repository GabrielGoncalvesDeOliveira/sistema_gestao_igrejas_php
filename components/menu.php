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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>ChurchWeOn</title>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section>
        <h3>Seja bem-vindo ao ChurchWeOn</h3>
        <hr>
        <h5>Este sistema tem por objetivo facilitar a gestão de igrejas evangélicas por meio de módulos relacionados aos membros, atividades e à escola bíblica</h5>
        <hr>
    </section>
    
    <section>
        <div class="container">
            <div class="child">
                <div class="card grey darken-3">
                    <div class="card-content white-text">
                        <span class="card-title">Membros <i class="material-icons right">person</i></span>
                        <p>Quer saber mais informações sobre seus membros ou deseja cadastrar um novo? Está no lugar certo!</p>
                    </div>
                    <button class="btn waves-effect waves-light light-blue darken-4" type="button" id="btnMembro"
                        onclick="JavaScript:location.href='../pages/listaMembros.php'">Ver mais
                    </button>
                </div>
            </div>

            <div class="child">
                <div class="card grey darken-3">
                    <div class="card-content white-text">
                        <span class="card-title">Família<i class="material-icons right">people</i></span>
                        <p>Gostaria de adicionar uma família e novos membros a ela? Acesse aqui, pois você está no lugar certo!</p>
                    </div>
                    <button class="btn waves-effect waves-light light-blue darken-4" type="button" id="btnFamilia"
                        onclick="JavaScript:location.href='../pages/listaFamilias.php'">Ver mais
                    </button>
                </div>
            </div>

            <div class="child">
                <div class="card grey darken-3">
                    <div class="card-content white-text">
                        <span class="card-title">Atividades <i class="material-icons right">today</i></span>
                        <p>Deseja conferir a programação de sua igreja, adicionar um novo culto, célula ou atividade? Confira mais detalhes.</p>
                    </div>
                    <button class="btn waves-effect waves-light light-blue darken-4" type="button" id="btnAtividade"
                        onclick="JavaScript:location.href='../pages/listaAtividades.php'">Ver mais
                    </button>
                </div>
            </div>     
            
            <div class="child">
                <div class="card grey darken-3">
                    <div class="card-content white-text">
                        <span class="card-title">Igrejas <i class="material-icons right">home</i></span>
                        <p>Interessado em gerenciar as informações de sua igreja local? Clique aqui e confira o que temos para você!</p>
                    </div>
                    <button class="btn waves-effect waves-light light-blue darken-4" type="button" id="btnIgreja"
                        onclick="JavaScript:location.href='../pages/listaIgrejas.php'">Ver mais
                    </button>
                </div>
            </div>    
        </div>
    </section>
    <section>
        <hr>
        <?php include 'footer.php'; ?>
    </section>
</body>

</html>                