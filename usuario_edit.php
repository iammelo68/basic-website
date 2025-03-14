<?php
require("conexao.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuario - Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Adicionar Usuario
                        <a href="admin.php" class="btn btn-danger float-end">Voltar</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                    $usuario_id = mysqli_real_escape_string($conexao, $_GET['id']);
                    $sql = "SELECT * FROM usuarios WHERE id = '$usuario_id'";
                    $query = mysqli_query($conexao, $sql);

                    if (mysqli_num_rows($query) > 0) {
                    $usuario = mysqli_fetch_array($query);

                    ?>
                    <form action="acoes.php" method="POST">
                        <input type="hidden" name="usuario_id" value="<?=$usuario['id']?>">
                        <div class="mb-3">
                            <label>Nome</label>
                            <input type="text" name="nome" value="<?=$usuario['nome']?>" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>E-mail</label>
                            <input type="text" name="email" value="<?=$usuario['email']?>" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Assunto</label>
                            <input type="text" name="assunto" value="<?=$usuario['assunto']?>" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Texto</label>
                            <input type="text" name="mensagem" value="<?=$usuario['mensagem']?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="update_usuario" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                        <?php
                    } else {
                        echo "<h5>Usuário não encontrado</h5>";
                    }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
