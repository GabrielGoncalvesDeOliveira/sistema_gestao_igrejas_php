<?php
   include '../components/menu.php'; 
   include '../database/conexao.php';
   $sql = "select * from membro order by nome;";
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

    <title>Membros</title>
</head>

<body>
    <div class="container deep-orange lighten-5">
        <div class="card-panel grey darken-1">
            <H1>Membros</H1>
        </div>

        <div class="col s10">
            <table class="striped blue lighten-4">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Contato</th>
                    <th>Endereco</th>
                    <th>Data nascimento</th>
                    <th class="center">Funções</th>
                    <th>
                        <a class="btn-floating btn-small waves-effect waves-light green"
                            onclick="JavaScript:location.href='formCadastroMembros.php'">
                            <i class="material-icons">add</i>
                        </a>
                    </th>
                </tr>
                <?php 
                    foreach($listaMembros as $membro) {
                ?>
                <tr>
                    <td><?php echo $membro['id_membro']?> </td>
                    <td><?php echo $membro['nome']?> </td>
                    <td><?php echo $membro['email']?> </td>
                    <td><?php echo $membro['contato']?> </td>
                    <td><?php echo $membro['endereco']?> </td>
                    <td><?php echo $membro['data_nascimento']?> </td>
                    <td class="center">
                        <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='formEdicaoMembros.php?id=' + 
                           <?php echo $membro['id_membro'];?>">
                            <i class="material-icons">edit</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light red"
                            onclick="JavaScript:remover(<?php echo $membro['id_membro'];?>)">
                            <i class="material-icons">delete</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light  light-blue darken-3" onclick="JavaScript:location.href='formInfoMembro.php?id=' + 
                           <?php echo $membro['id_membro'];?>">
                            <i class="material-icons">info</i>
                        </a>
                    </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <br>
        <br>
    </div>

</body>

</html>

<?php include '../components/footer.php'?> 
<!--
<script>
function remover(id) {
    if (confirm('Deseja excluir o membro ' + id + '?')) {
        location.href = 'removerMembro.php?id=' + id;
    }
}
</script> -->