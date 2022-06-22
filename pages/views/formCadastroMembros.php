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

    <title>Cadastrar Membro</title>
</head>

<body>
    <div class="container deep-orange lighten-5 s12">

        <div class="col s12">
            <h1>Cadastrar Membro</h1>

            <div class="row">
                <form action="cadastroMembro.php" method="post" id="formCadastroMembro" class="col s12">
                    <div class="col s11">
                        <div class="input-field col s8">
                            <label for="lblNome" class="black-text">Informe o nome completo: </label>
                            <input placeholder="Membro da Silva ..." id="txt_nome" name="txtNome" type="text">
                        </div>
                        <div class="input-field col s6">
                            <label for="lblEmail" class="black-text">Informe o e-mail: </label>
                            <input placeholder="membro@email.com" id="txt_email" name="txtEmail" type="text">
                        </div>
                        <div class="input-field col s4">
                            <label for="lblContato" class="black-text">Informe o contato (nº celular): </label>
                            <input placeholder="(11) 99999-9999" id="txt_contato" name="txtContato" type="text">
                        </div>
                        <div class="input-field col s4">
                            <label for="lblCpf" class="black-text">Informe o CPF: </label>
                            <input placeholder="444.444.444-55" id="txt_cpf" name="txtCpf" type="text">
                        </div>
                        <div class="input-field col s4">
                            <label for="lblDataNascimento" class="black-text">Informe a data de nascimento: </label>
                            <input placeholder="dd/mm/aaaa" id="txt_data_nascimento" name="txtDataNascimento" type="date">
                        </div>
                        <div class="input-field col s6">
                            <label for="lblEndereco" class="black-text">Informe o endereço: </label>
                            <input placeholder="Rua do membro, 2122" id="txt_endereco" name="txtEndereco" type="text">
                        </div>
                        <div class="input-field col s2">
                            <label for="lblBatizado" class="black-text">É batizado? </label>
                            <input id="txt_batizado" name="txtBatizado" type="checkbox">
                        </div>
                        <div class="input-field col s4">
                            <label for="lblMembroDesde" class="black-text">Membro desde: </label>
                            <input placeholder="dd/mm/aaaa" id="txt_membro_desde" name="txtMembroDesde" type="text">
                        </div>
                        <!-- ADICIONAR O CAMPO DO GÊNERO -->
                        <div class="input-field col s4">
                            <label for="lblNacionalidade" class="black-text">Nacionalidade: </label>
                            <input placeholder="Brasileiro" id="txt_nacionalidade" name="txtNacionalidade" type="text">
                        </div>
                        <!-- ADICIONAR FORMA DE PEGAR O NOME DA FAMILIA E ENVIAR O ID NA REQUISICAO -->
                        <div class="input-field col s6">
                            <label for="lblFamilia" class="black-text">Familia: </label>
                            <input placeholder="Familia Silva" id="txt_familia" name="txtFamilia" type="text">
                        </div>
                         <!-- ADICIONAR FORMA DE PEGAR O NOME DA IGREJA E ENVIAR O ID NA REQUISICAO -->
                         <div class="input-field col s6">
                            <label for="lblIgreja" class="black-text">Igreja: </label>
                            <input placeholder="2ª IEQ Assis" id="txt_igreja" name="txtIgreja" type="text">
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
                                onclick="JavaScript:location.href='listaMembros.php'">
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