<?php 
   include '../components/navbar.php'; 

   $id = $_GET['id']; 

   include '../database/conexao.php';
   $sql = "select * from igreja where id = ?;";
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>ChurchWeOn</title>
</head>

<body>
    <div class="container deep-orange lighten-5 col s12">
        <div class="brown lighten-2 col s12">
            <h1>Detalhes da Igreja</h1>
        </div>
        <div class="container">
            <div class="input-field col s10">
                <label for="lblid" class="black-text">Id: <?php echo $dados['id'];?></label>
                    <br />
                <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
            </div>
            <div class="row">
                <div class="input-field col s10">
                    <label for="lblDenominacao">
                        <h5><b>Denominacao: </b><?php echo $dados['denominacao'];?></h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10">
                    <label for="lblEndereco">
                        <h5><b>Endereço: </b><?php echo $dados['endereco'];?></h5>
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s10">
                    <label for="lblContato">
                        <h5><b>Contato: </b><?php echo $dados['contato'];?></h5>
                    </label>
                </div>
            </div>

            <br><br>
            <div class="row">
                <a class="waves-effect waves-light btn orange" onclick="JavaScript:location.href='formEdicaoIgrejas.php?id=' + 
                    <?php echo $dados['id'];?>">
                    <i class="material-icons right">edit</i>Editar</a>

                <a class="waves-effect waves-light btn red"
                    onclick="JavaScript:remover(<?php echo $dados['id']?>)">
                    <i class="material-icons right">delete</i>Remover</a>

                <a class="waves-effect waves-light btn blue" onclick="JavaScript:location.href='listaIgrejas.php'">
                    <i class="material-icons right">list</i>Listar</a>
            </div>
        </div>
    </div>
</body>

</html>

<script>
function remover(id) {
    if (confirm('Deseja excluir a igreja ' + id +'?')) {
        location.href = '../services/deletarIgreja.php?id=' + id;
    }
}
</script>