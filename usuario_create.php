<?php
session_start();
require("conexao.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuario - Criar</title>
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
                    <form action="acoes.php" method="POST">
                        <div class="mb-3">
                            <label>Nome</label>
                            <input type="text" name="nome" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>E-mail</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Assunto</label>
                            <input type="text" name="assunto" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Texto</label>
                            <input type="text" name="mensagem" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="create_usuario" class="btn btn-primary">Criar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>