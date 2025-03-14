<?php
require 'conexao.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuario - Visualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Visualizar Usuário
                        <a href="admin.php" class="btn btn-danger float-end">Voltar</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id'])) {
                        $usuario_id = mysqli_real_escape_string($conexao, $_GET['id']);
                        $sql = "SELECT * FROM usuarios WHERE id = '$usuario_id'";
                        $query = mysqli_query($conexao, $sql);
                        if(mysqli_num_rows($query) > 0) {
                            $usuario = mysqli_fetch_assoc($query);
                    ?>
                        <div class="mb-3">
                            <label>Nome</label>
                            <p class="form-control">
                                <?= $usuario['nome'] ?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>E-mail</label>
                            <p class="form-control">
                                <?= $usuario['email'] ?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>Assunto</label>
                            <p class="form-control">
                                <?= $usuario['assunto'] ?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>Mensagem</label>
                            <p class="form-control">
                                <?= $usuario['mensagem'] ?>
                            </p>
                        </div>
                        <?php
                        } else
                          echo "<h5>Usuario não encontrado</h5>";
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>