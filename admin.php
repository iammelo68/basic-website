<?php
session_start();
require('conexao.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container mt-4">
    <?php include("mensagem.php"); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Lista de usuarios
                    <a href="usuario_create.php" class="btn btn-primary float-end">Adicionar Usuario</a></h4>
                    <a href="index.html" class="btn btn-danger">Voltar</a></h4>
                </div>
                <div class="card-body">
                    <table class="table table-border table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Assunto</th>
                            <th>Texto</th>
                            <th>Acoes</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM usuarios";
                            $usuarios = mysqli_query($conexao, $sql);

                            if(mysqli_num_rows($usuarios) > 0) {
                                foreach($usuarios as $usuario) {
                            ?>
                            <tr>
                                <td><?=$usuario['id']?> </td>
                                <td><?=$usuario['nome']?> </td>
                                <td><?=$usuario['email']?> </td>
                                <td><?=$usuario['assunto']?> </td>
                                <td><?=$usuario['mensagem']?> </td>
                                <td>
                                    <a href="usuario_view.php?id=<?=$usuario['id']?>" class="btn btn-primary btn-sm">Visualizar</a>
                                    <a href="usuario_edit.php?id=<?=$usuario['id']?>" class="btn btn-success btn-sm">Editar</a>
                                    <form   action="acoes.php" method="POST" class="d-inline">
                                        <button type="submit" name="delete_usuario" value= "<?=@$usuario['id']?>" class="btn btn-danger btn-sm">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            }
                            } else {
                                echo '<h5>Nenhum usuario encontrado</h5>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>