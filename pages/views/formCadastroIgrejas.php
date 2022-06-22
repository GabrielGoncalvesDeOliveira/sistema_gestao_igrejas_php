<?php 
   include '/components/menu.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Cadastrar Igreja</title>
</head>

<body>
    <div class="container deep-orange lighten-5 s12">

        <div class="col s12">
            <h1>Cadastrar Igreja</h1>

            <div class="row">
                <form action="cadastroIgreja.php" method="post" id="formCadastroIgreja" class="col s12">
                    <div class="col s11">
                        <div class="input-field col s8">
                            <label for="lblDenominacao" class="black-text">Informe a denominação: </label>
                            <input placeholder="Igreja evangélica ..." id="txt_denominacao" name="txtDenominacao" type="text">
                        </div>
                        <div class="input-field col s8">
                            <label for="lblCnpj" class="black-text">Informe o CNPJ: </label>
                            <input placeholder="11.111.001/0001-11" id="txt_cnpj" name="txtCnpj" type="text">
                        </div>
                        <div class="input-field col s8">
                            <label for="lblRazaoSocial" class="black-text">Informe a razão social: </label>
                            <input placeholder="Igreja evangélica ..." id="txt_razao_social" name="txtRazaoSocial" type="text">
                        </div>
                        <div class="input-field col s8">
                            <label for="lblEndereco" class="black-text">Informe o endereço: </label>
                            <input placeholder="Rua da Igreja, 2122" id="txt_endereco" name="txtEndereco" type="text">
                        </div>
                        <div class="input-field col s8">
                            <label for="lblContato" class="black-text">Informe o contato: </label>
                            <input placeholder="(11) 99999-9999" id="txt_contato" name="txtContato" type="text">
                        </div>
                        <div class="input-field col s8">
                            <label for="lblEmail" class="black-text">Informe o e-mail: </label>
                            <input placeholder="igreja@email.com" id="txt_email" name="txtEmail" type="text">
                        </div>
                        <div class="input-field col s8">
                            <label for="lblFundada_em" class="black-text">Informe o data de fundação: </label>
                            <input placeholder="15/11/1972" id="txt_fundada_em" name="txtFundadaEm" type="text">
                        </div>
                        <div class="input-field col s8">
                            <br>
                            <button class="btn waves-effect waves-light green" type="submit">Cadastrar
                                <i class="material-icons right">save</i>
                            </button>
                            <button class="btn waves-effect waves-light red" type="reset">Limpar
                                <i class="material-icons right">brush</i>
                            </button>

                            <button class="btn waves-effect waves-light  indigo darken-4" type="button" id="btnVoltar"
                                onclick="JavaScript:location.href='listaIgrejas.php'">
                                Voltar <i class="material-icons right">arrow_back</i>
                            </button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
</body>

</html>
<?php include '/components/footer.php'?> 