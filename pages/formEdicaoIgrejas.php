<?php 
    include '../components/navbar.php'; 
    
    $id = $_GET['id']; 

    include '../database/conexao.php';
    $sql = "select * from igreja where id=?;";
    $pdo = Conexao::conectar(); 
    $query = $pdo->prepare($sql);
    $query->execute (array($id));
    $dados = $query->fetch(PDO::FETCH_ASSOC);

    Conexao::desconectar(); 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/font-awesome-regular-1/512/chess-king-256.png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <title>ChurchWeOn</title>
</head>
<body>
<div class= "container brown lighten-4  black-text col s12">
        <div class = "brown lighten-2 col s12">
            <h1>Editar Igreja</h1>
        </div>
        <div class="row">
            <form action="../services/editarIgreja.php" method="post" id="formEdicaoIgreja" class="col s12" required>
                <div class="input-field col s2">
                    <label for="lblId" class="black-text" >ID: <?php echo $dados['id'];?></label>
                    <br/>
                    <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                </div>
                <div class="input-field col s8">
                    <label for="lblDenominacao" class="black-text">Denominacao: </label> 
                    <input placeholder="" id="txt_denominacao" name="txtDenominacao" value="<?php echo $dados['denominacao']?>" type="text" required>
                </div>
                <div class="input-field col s6">
                    <label for="lblEndereco" class="black-text">Endereco: </label> 
                    <input placeholder="" id="txt_endereco" name="txtEndereco" value="<?php echo $dados['endereco']?>" type="text" required>
                </div>
                <div class="input-field col s4">
                    <label for="lblContato" class="black-text">Contato: </label> 
                    <input placeholder="" id="txt_contato" name="txtContato" value="<?php echo $dados['contato']?>" type="text" required>
                </div>

                <div class = "input-field col s8">
                    <br>
                    <button class="btn waves-effect waves-light green" type="submit" >Salvar
                        <i class="material-icons right">save</i>
                    </button>

                    <button class="btn waves-effect waves-light indigo darken-4" 
                        type="button" id="btnVoltar" onclick="JavaScript:location.href='listaIgrejas.php'">Voltar
                        <i class="material-icons right">arrow_back</i> 
                    </button>
                    
                </div>

            </form>
        </div>
    </div> 
</body>
</html>