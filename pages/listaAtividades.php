<?php
   include './../components/navbar.php'; 
   include './../database/conexao.php';
   $sql = "select * from atividade order by data_atividade desc;";
   $pdo = conexao::conectar(); 
   $listaAtividades = $pdo->query($sql); 
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
    <h1>Atividades - <a class="btn-floating btn-big waves-effect waves-light green"
            onclick="JavaScript:location.href='formCadastroAtividades.php'">
            <i class="material-icons">add</i>
        </a></h1>
    </div>

    <div class="col s10">
        <table class="striped blue lighten-4">
            <tr>
                <th>Id</th>
                <th>Descricao</th>
                <th>Data da atividade</th>
                <th>Hora</th>
                <th>Local</th>
                <th class="center">Funções</th>
            </tr>
            <?php 
                foreach($listaAtividades as $atividade) {
            ?>
            <tr>
                <td><?php echo $atividade['id']?> </td>
                <td><?php echo $atividade['descricao']?> </td>
                <td><?php echo $atividade['data_atividade']?> </td>
                <td><?php echo $atividade['hora']?> </td>
                <td><?php echo $atividade['local']?> </td>

                <td class="center">
                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='formEdicaoAtividades.php?id=' + 
                        <?php echo $atividade['id'];?>">
                        <i class="material-icons">edit</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript:remover(<?php echo $atividade['id'];?>)">
                        <i class="material-icons">delete</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light  light-blue darken-3" onclick="JavaScript:location.href='formInfoAtividade.php?id=' + 
                        <?php echo $atividade['id'];?>">
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
    if (confirm('Deseja excluir a atividade ' + id + '?')) {
        location.href = '../services/deletarAtividade.php?id=' + id;
    }
}
</script>