<?php
   include './../components/navbar.php'; 
   include './../database/conexao.php';
   $id = trim($_GET['id']);

   $pdo = Conexao::conectar();

   $sql = "select * from membro where familia = ? order by nome;";
   $query = $pdo->prepare($sql);
   $query->execute(array($id));
   $listaMembros = $query->fetchAll(PDO::FETCH_ASSOC);

   $sql = "select * from familia where id = ?";
   $query = $pdo->prepare($sql);
   $query->execute(array($id));
   $familia = $query->fetch(PDO::FETCH_ASSOC);
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
    <h1>Membros da família - <?php echo $familia['nome']?> <a class="btn-floating btn-big waves-effect waves-light green"
            onclick="JavaScript:location.href='formCadastroMembros.php'">
            <i class="material-icons">add</i>
        </a></h1>
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
            </tr>
            <?php 
                foreach($listaMembros as $membro) {
            ?>
            <tr>
                <td><?php echo $membro['id']?> </td>
                <td><?php echo $membro['nome']?> </td>
                <td><?php echo $membro['email']?> </td>
                <td><?php echo $membro['contato']?> </td>
                <td><?php echo $membro['endereco']?> </td>
                <td><?php echo $membro['data_nascimento']?> </td>

                <td class="center">
                    <a class="btn-floating btn-small waves-effect waves-light  light-blue darken-3" onclick="JavaScript:location.href='formInfoMembro.php?id=' + 
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