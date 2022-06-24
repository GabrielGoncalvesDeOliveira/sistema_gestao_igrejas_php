<?php 
   include '../components/navbar.php'; 
   include '../database/conexao.php';

   $pdo = Conexao::conectar();
   $sql = "select * from familia order by nome;";
   $listaFamilia = $pdo->query($sql);

   Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Cadastrar Membro</title>
</head>

<body>
    <div class="container deep-orange lighten-5 s12">
        <div class="col s12">
            <h1>Cadastrar Membro</h1>

            <div class="row">
                <form action="../services/inserirMembro.php" method="post" id="formCadastroMembro" class="col s12" required>
                    <div class="col s11">
                        <div class="input-field col s8">
                            <label for="lblNome" class="black-text">Informe o nome completo: </label>
                            <input placeholder="Membro da Silva ..." id="txt_nome" name="txtNome" type="text" required>
                        </div>
                        <div class="input-field col s6">
                            <label for="lblEmail" class="black-text">Informe o e-mail: </label>
                            <input placeholder="membro@email.com" id="txt_email" name="txtEmail" type="text" required>
                        </div>
                        <div class="input-field col s4">
                            <label for="lblContato" class="black-text">Informe o contato (nº celular): </label>
                            <input placeholder="(11) 99999-9999" id="txt_contato" name="txtContato" type="text" required>
                        </div>
                        <div class="input-field col s4">
                            <label for="lblDataNascimento" class="black-text">Informe a data de nascimento: </label>
                            <input placeholder="dd/mm/aaaa" id="txt_data_nascimento" name="txtDataNascimento" type="date" required>
                        </div>
                        <div class="input-field col s6">
                            <label for="lblEndereco" class="black-text">Informe o endereço: </label>
                            <input placeholder="Rua do membro, 2122" id="txt_endereco" name="txtEndereco" type="text" required>
                        </div>

                        <div class="input-field col s6">
                            <label for="lblFamilia" class="black-text bold">Escolha a família:</label>
                            <br>
                            <div class="input-field col s8">
                                <select name="slcFamilia" id="slcFamilia" required>
                                    <option value="" disabled selected>________________________</option>
                                    <?php
                                        foreach($listaFamilia as $familia){?>
                                            <option value="<?php echo $familia['id'];?>"><?php echo $familia['nome'];?></option>
                                    <?php }
                                    ?>                               
                                </select>
                            </div>
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
                            onclick="JavaScript:location.href='listaMembros.php'">Voltar 
                            <i class="material-icons right">arrow_back</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<script>
$(document).ready(function() {
    $('select').material_select();
});
</script>

<?php include '../components/footer.php'?>