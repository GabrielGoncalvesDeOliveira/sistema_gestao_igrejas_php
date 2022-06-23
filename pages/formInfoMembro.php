<?php 
   include '../components/navbar.php'; 

   $id = $_GET['id']; 

   include '../database/conexao.php';
   $sql = "select * from membro where id_membro = ?;";
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
            <h1>Detalhes do membro</h1>
        </div>
        <div class="container">
            <div class="input-field col s2">
                <label for="lblid" class="black-text">Id: <?php echo $dados['id_membro'];?></label>
                    <br />
                <input type="hidden" name="id" id="id_membro" value="<?php echo $id;?>">
            </div>
            <div class="row">
                <div class="input-field col s8">
                    <label for="lblNome">
                        <h5><b>Nome: </b><?php echo $dados['nome'];?></h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <label for="lblEmail">
                        <h5><b>Email: </b><?php echo $dados['email'];?></h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <label for="lblContato">
                        <h5><b>Contato: </b><?php echo $dados['contato'];?></h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <label for="lblCpf">
                        <h5><b>CPF: </b><?php echo $dados['cpf'];?></h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <label for="lblDataNascimento">
                        <h5><b>Data de nascimento: </b><?php echo $dados['data_nascimento'];?></h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <label for="lblEndereco">
                        <h5><b>Endereço: </b><?php echo $dados['endereco'];?></h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s2">
                    <label for="lblBatizado">
                        <h5><b>Batizado: </b><?php echo $dados['batizado'];?></h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <label for="lblMembroDesde">
                        <h5><b>Membro desde: </b><?php echo $dados['membro_desde'];?></h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <label for="lblNaacionalidade">
                        <h5><b>Nacionalidade: </b><?php echo $dados['nacionalidade'];?></h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <label for="lblFamilia">
                        <h5><b>Familia: </b><?php echo $dados['familia'];?></h5>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <label for="lblIgreja">
                        <h5><b>Igreja: </b><?php echo $dados['igreja'];?></h5>
                    </label>
                </div>
            </div>

            <br><br>
            <div class="row">
                <a class="waves-effect waves-light btn orange" onclick="JavaScript:location.href='formEdicaoMembro.php?id_membro=' + 
                    <?php echo $dados['id_membro'];?>">
                    <i class="material-icons right">edit</i>Editar</a>

                <a class="waves-effect waves-light btn red"
                    onclick="JavaScript:remover(<?php echo $dados['id_membro']?>)">
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
        location.href = 'remImovel.php?id_membro=' + id;
    }
}
</script>