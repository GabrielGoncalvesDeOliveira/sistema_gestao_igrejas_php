<?php 
    include 'components/menu.php'; 
    
    $id = $_GET['id_membro']; 

    include 'conexao.php';
    $sql = "select * from membro where id_membro=?;";
    $pdo = Conexao::conectar(); 
    $query = $pdo->prepare($sql);
    $query->execute (array($id));
    $dados = $query->fetch(PDO::FETCH_ASSOC);

    Conexao::desconectar(); 
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <title>Editar Dados do Membro</title>
</head>
<body>
    <div class= "container brown lighten-4  black-text col s12">
        <div class = "brown lighten-2 col s12">
            <h1>Editar Membro</h1>
        </div>
        <div class="row">
            <form action="editarMembro.php" method="post" id="formEdicaoMembro" class="col s12">
                <div class="input-field col s2">
                    <label for="lblId" class="black-text" >ID: <?php echo $dados['id_membro'];?></label>
                    <br/>
                    <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                </div>
            
                <div class="input-field col s8">
                    <label for="lblNome" class="black-text">Nome: </label> 
                    <input placeholder="" id="txt_nome" name="txtNome" value="<?php echo $dados['nome']?>" type="text">
                </div>
                <div class="input-field col s6">
                    <label for="lblEmail" class="black-text">E-mail: </label> 
                    <input placeholder="" id="txt_email" name="txtEmail" value="<?php echo $dados['email']?>" type="text">
                </div>
                <div class="input-field col s4">
                    <label for="lblContato" class="black-text">Contato: </label> 
                    <input placeholder="" id="txt_contato" name="txtContato" value="<?php echo $dados['contato']?>" type="text">
                </div> 
                <div class="input-field col s4">
                    <label for="lblCpf" class="black-text">CPF: </label> 
                    <input placeholder="" id="txt_cpf" name="txtCpf" value="<?php echo $dados['cpf']?>" type="text">
                </div>
                <div class="input-field col s4">
                    <label for="lblDataNascimento" class="black-text">Data de nascimento: </label> 
                    <input placeholder="" id="txt_data_nascimento" name="txtDataNascimento" value="<?php echo $dados['data_nascimento']?>" type="text">
                </div>
                <div class="input-field col s6">
                    <label for="lblEnderecp" class="black-text">Endereco: </label> 
                    <input placeholder="" id="txt_endereco" name="txtEndereco" value="<?php echo $dados['endereco']?>" type="text">
                </div>
                <div class="input-field col s2">
                    <label for="lblBatizado" class="black-text">Batizado: </label> 
                    <input placeholder="" id="txt_batizado" name="txtBatizado" value="<?php echo $dados['batizado']?>" type="text">
                </div>
                <div class="input-field col s4">
                    <label for="lblMembroDesde" class="black-text">Membro desde: </label> 
                    <input placeholder="" id="txt_membro_desde" name="txtMembroDesde" value="<?php echo $dados['membro_desde']?>" type="text">
                </div>
                <!-- ADICIONAR O CAMPO DO GÊNERO -->
                <div class="input-field col s4">
                    <label for="lblNacionalidade" class="black-text">Nacionalidade: </label> 
                    <input placeholder="" id="txt_nacionalidade" name="txtNacionalidade" value="<?php echo $dados['nacionalidade']?>" type="text">
                </div>
                <!-- ADICIONAR FORMA DE PEGAR O NOME DA FAMILIA E ENVIAR O ID NA REQUISICAO -->
                <div class="input-field col s6">
                    <label for="lblFamilia" class="black-text">Familia: </label> 
                    <input placeholder="" id="txt_familia" name="txtFamilia" value="<?php echo $dados['familia']?>" type="text">
                </div>
                <!-- ADICIONAR FORMA DE PEGAR O NOME DA IGREJA E ENVIAR O ID NA REQUISICAO -->
                <div class="input-field col s6">
                    <label for="lblIgreja" class="black-text">Igreja: </label> 
                    <input placeholder="" id="txt_igreja" name="txtIgreja" value="<?php echo $dados['igreja']?>" type="text">
                </div>

                <div class = "input-field col s8">
                    <br>
                    <button class="btn waves-effect waves-light green" type="submit" >Salvar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="reset" >Limpar
                        <i class="material-icons right">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light  indigo darken-4" 
                    type="button" id="btnVoltar" onclick="JavaScript:location.href='listaMembros.php'">
                    Voltar <i class="material-icons right">arrow_back</i> 
                    </button>
                    
                </div>

            </form>
        </div>
    </div> 
</body>
</html>