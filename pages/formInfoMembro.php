<?php 
   include '../components/navbar.php'; 

   $id = $_GET['id']; 

   include '../database/conexao.php';
   $sql = "select * from membro where id = ?;";
   $pdo = Conexao::conectar(); 
   $query = $pdo->prepare($sql);
   $query->execute (array($id));
   $dados = $query->fetch(PDO::FETCH_ASSOC);

   $sql = "select * from familia order by nome";
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>ChurchWeOn</title>
</head>

<body>
    <div class="container deep-orange lighten-5 col s12">
        <div class="brown lighten-2 col s12">
            <h1>Detalhes do membro</h1>
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
                        <h5><b>Nome: </b><?php echo $dados['nome'];?></h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10">
                    <label for="lblEmail">
                        <h5><b>Email: </b><?php echo $dados['email'];?></h5>
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
            <div class="row">
                <div class="input-field col s10">
                    <label for="lblDataNascimento">
                        <h5><b>Data de nascimento: </b><?php echo $dados['data_nascimento'];?></h5>
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
                <div class="input-field col s6">
                    <label for="lblFamilia">
                        <h5><b>Familia: </b><?php foreach($listaFamilia as $familia) {
                            if ($familia['id'] == $dados['familia']) {
                                echo $familia['nome'];
                            } }?>
                        </h5>
                    </label>
                </div>
            </div>

            <br><br>
            <div class="row">
                <a class="waves-effect waves-light btn orange" onclick="JavaScript:location.href='formEdicaoMembros.php?id=' + 
                    <?php echo $dados['id'];?>">
                    <i class="material-icons right">edit</i>Editar</a>

                <a class="waves-effect waves-light btn red"
                    onclick="JavaScript:remover(<?php echo $dados['id']?>)">
                    <i class="material-icons right">delete</i>Remover</a>

                <a class="waves-effect waves-light btn blue" onclick="JavaScript:location.href='listaMembros.php'">
                    <i class="material-icons right">list</i>Listar</a>
            </div>
        </div>
    </div>
</body>

</html>

<script>
function remover(id) {
    if (confirm('Deseja excluir o membro ' + id +'?')) {
        location.href = '../services/deletarMembro.php?id=' + id;
    }
}
</script>