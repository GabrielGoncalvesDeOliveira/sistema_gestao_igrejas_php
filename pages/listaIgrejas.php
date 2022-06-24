<?php
   include './../components/navbar.php'; 
   include './../database/conexao.php';
   $sql = "select * from igreja order by denominacao;";
   $pdo = conexao::conectar(); 
   $listaMembros = $pdo->query($sql); 
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
    <h1>Igrejas - <a class="btn-floating btn-big waves-effect waves-light green"
            onclick="JavaScript:location.href='formCadastroIgrejas.php'">
            <i class="material-icons">add</i>
        </a></h1>
    </div>

    <div class="col s10">
        <table class="striped blue lighten-4">
            <tr>
                <th>Id</th>
                <th>Denominacao</th>
                <th>Endereco</th>
                <th>Contato</th>
                <th class="center">Funções</th>
            </tr>
            <?php 
                foreach($listaMembros as $membro) {
            ?>
            <tr>
                <td><?php echo $membro['id']?> </td>
                <td><?php echo $membro['denominacao']?> </td>
                <td><?php echo $membro['endereco']?> </td>
                <td><?php echo $membro['contato']?> </td>

                <td class="center">
                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='formEdicaoIgrejas.php?id=' + 
                        <?php echo $membro['id'];?>">
                        <i class="material-icons">edit</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript:remover(<?php echo $membro['id'];?>)">
                        <i class="material-icons">delete</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light  light-blue darken-3" onclick="JavaScript:location.href='formInfoIgreja.php?id=' + 
                        <?php echo $membro['id'];?>">
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
    if (confirm('Deseja excluir a igreja ' + id + '?')) {
        location.href = '../services/deletarIgreja.php?id=' + id;
    }
}
</script>