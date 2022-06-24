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
            <h1>Cadastrar Atividade</h1>

            <div class="row">
                <form action="../services/inserirAtividade.php" method="post" id="formCadastroAtividade" class="col s12" required>
                    <div class="col s11">
                        <div class="input-field col s8">
                            <label for="lblDescricao" class="black-text">Informe a descrição da atividade: </label>
                            <input placeholder="Culto de domingo de Santa Ceia ..." id="txt_descricao" name="txtDescricao" type="text" required>
                        </div>
                        <div class="input-field col s2">
                            <label for="lblNome" class="black-text">Informe a data: </label>
                            <input placeholder="" id="txt_data_atividade" name="txtDataAtividade" type="date" required>
                        </div>
                        <div class="input-field col s2">
                            <label for="lblNome" class="black-text">Informe o horário: </label>
                            <input placeholder="" id="txt_hora" name="txtHora" type="time" required>
                        </div>
                        <div class="input-field col s8">
                            <label for="lblLocal" class="black-text">Informe o local da atividade: </label>
                            <input placeholder="Rua Anita Garibalde, 206" id="txt_local" name="txtLocal" type="text" required>
                        </div>
                        <div class="input-field col s10">
                            <label for="lblMensagem" class="black-text">Informe a mensagem: </label>
                            <input placeholder="Você está mais do que convidado a participar!" id="txt_mensagem" name="txtMensagem" type="text" required>
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
                            onclick="JavaScript:location.href='listaAtividades.php'">Voltar 
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