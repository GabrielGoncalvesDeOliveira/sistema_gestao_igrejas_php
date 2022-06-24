<?php
   include './../components/navbar.php'; 
   include './../database/conexao.php';
   $sql = "select * from familia order by nome;";
   $pdo = conexao::conectar(); 
   $listaFamilias = $pdo->query($sql); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="icon" href="https://cdn3.iconfinder.com/data/icons/font-awesome-regular-1/512/chess-king-256.png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>ChurchWeOn</title>
</head>

<body>
    <div class="deep-orange lighten-5">
    <h1>Famílias - <a class="btn-floating btn-big waves-effect waves-light green"
            onclick="JavaScript:location.href='formCadastroFamilias.php'">
            <i class="material-icons">add</i>
        </a></h1>
    </div>

    <div class="col s10">
        <table class="striped blue lighten-4">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Quantidade de membros</th>
                <th class="center">Funções</th>
            </tr>
            <?php 
                foreach($listaFamilias as $familia) {
            ?>
            <tr>
                <td><?php echo $familia['id']?> </td>
                <td><?php echo $familia['nome']?> </td>
                <td><?php echo $familia['qtd_membros']?> </td>

                <td class="center">
                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='formEdicaoFamilias.php?id=' + 
                        <?php echo $familia['id'];?>">
                        <i class="material-icons">edit</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript:remover(<?php echo $familia['id'];?>)">
                        <i class="material-icons">delete</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light  light-blue darken-3" onclick="JavaScript:location.href='formInfoFamilia.php?id=' + 
                        <?php echo $familia['id'];?>">
                        <i class="material-icons">info</i>
                    </a>
                </td>
                </tr>
            <?php } ?>
        </table>
    </div>

</body>

</html>

<?php include '../components/footer.php'?> 
<script>
function remover(id) {
    if (confirm('Deseja excluir a família ' + id + '?')) {
        location.href = '../services/deletarFamilia.php?id=' + id;
    }
}
</script>