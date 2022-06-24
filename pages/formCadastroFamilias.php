<?php
    include '../components/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>ChurchWeOn</title>
</head>
<body>
<div class="container deep-orange lighten-5 s12">
        <div class="col s12">
            <h1>Cadastrar Família</h1>

            <div class="row">
                <form action="../services/inserirFamilia.php" method="post" id="formCadastroFamilia" class="col s12" required>
                    <div class="col s11">
                        <div class="input-field col s8">
                            <label for="lblNome" class="black-text">Informe o nome da família: </label>
                            <input placeholder="Gonçalves de Oliveira ..." id="txt_nome" name="txtNome" type="text" required>
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <br>
                        <button class="btn waves-effect waves-light green" type="submit">Cadastrar
                            <i class="material-icons right">save</i>
                        </button>
                        
                        <button class="btn waves-effect waves-light red" type="reset">Limpar
                            <i class="material-icons right">brush</i>
                        </button>

                        <button class="btn waves-effect waves-light  indigo darken-4" type="button" id="btnVoltar"
                            onclick="JavaScript:location.href='listaFamilias.php'">Voltar 
                            <i class="material-icons right">arrow_back</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php include '../components/footer.php'?>