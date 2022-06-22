<?php
   include '/components/menu.php'; 
   include '/database/conexao.php';
   $sql = "select * from igreja order by denominacao;";
   $pdo = conexao::conectar(); 
   $listaIgrejas = $pdo->query($sql); 
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

    <title>Igrejas</title>
</head>

<body>
    <div class="container deep-orange lighten-5">
        <div class="card-panel grey darken-1">
            <H1>Igrejas</H1>
        </div>

        <div class="col s10">
            <table class="striped blue lighten-4">
                <tr>
                    <th>codigo</th>
                    <th>Denominação</th>
                    <th>CNPJ</th>
                    <th>Endereço</th>
                    <th>Contato</th>
                    <th>Email</th>
                    <th class="center">Funções</th>
                    <th>
                        <a class="btn-floating btn-small waves-effect waves-light green"
                            onclick="JavaScript:location.href='formCadastroIgejas.php'">
                            <i class="material-icons">add</i>
                        </a>
                    </th>
                </tr>
                <?php 
           foreach($listaIgrejas as $igreja) {
        ?>
                <tr>
                    <td><?php echo $igreja['id']?> </td>
                    <td><?php echo $igreja['denominacao']?> </td>
                    <td><?php echo $igreja['cnpj']?> </td>
                    <td><?php echo $igreja['endereco']?> </td>
                    <td><?php echo $igreja['contato']?> </td>
                    <td><?php echo $igreja['email']?> </td>
                    <td class="center">
                        <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='formEdicaoIgrejas.php?id=' + 
                           <?php echo $igreja['id'];?>">
                            <i class="material-icons">edit</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light red"
                            onclick="JavaScript:remover(<?php echo $igreja['id'];?>)">
                            <i class="material-icons">delete</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light  light-blue darken-3" onclick="JavaScript:location.href='formInfoIgreja.php?id=' + 
                           <?php echo $igreja['id'];?>">
                            <i class="material-icons">info</i>
                        </a>
                    </td>
                    <td></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <br>
        <br>
    </div>

</body>

</html>

<?php include 'footer.php'?> 

<script>
function remover(id) {
    if (confirm('Deseja excluir a igreja ' + id + '?')) {
        location.href = 'removerIgreja.php?id=' + id;
    }
}
</script>