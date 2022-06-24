<?php
    include '../components/navbar.php';

    $id = $_GET['id'];
    include '../database/conexao.php';

    $sql = "select * from familia where id = ?;";
    $pdo = Conexao::conectar();
    $query = $pdo->prepare($sql);
    $query->execute(array($id));
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>ChurchWeOn</title>
</head>
<body>
<div class="container deep-orange lighten-5 col s12">
        <div class="brown lighten-2 col s12">
            <h1>Detalhes da família</h1>
        </div>
        <div class="container">
            <div class="input-field col s10">
                <label for="lblid" class="black-text">Id: <?php echo $dados['id'];?></label>
                    <br />
                <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
            </div>
            <div class="row">
                <div class="input-field col s10">
                    <label for="lblNome">
                        <h5><b>Nome da família: </b><?php echo $dados['nome'];?></h5>
                    </label>
                </div>
            </div>

            <br><br>
            <div class="row">
                <a class="waves-effect waves-light btn orange" onclick="JavaScript:location.href='formEdicaoFamilias.php?id=' + 
                    <?php echo $dados['id'];?>">
                    <i class="material-icons right">edit</i>Editar</a>

                <a class="waves-effect waves-light btn red"
                    onclick="JavaScript:remover(<?php echo $dados['id']?>)">
                    <i class="material-icons right">delete</i>Remover</a>

                <a class="waves-effect waves-light btn blue" onclick="JavaScript:location.href='listaFamilias.php'">
                    <i class="material-icons right">list</i>Listar</a>
            </div>
        </div>
    </div>
</body>
</html>

<script>
function remover(id) {
    if (confirm('Deseja excluir a familia ' + id +'?')) {
        location.href = '../services/deletarFamilia.php?id=' + id;
    }
}
</script>

<?php include '../components/footer.php'?>