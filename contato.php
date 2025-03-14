<?php
require('conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Contatos</title>
  <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
  <div class="container px-5">
    <a class="navbar-brand" href="index.html">Bella Danse</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.html">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="duvidas.html">Dúvidas</a></li>
          <li class="nav-item"><a class="nav-link" href="#page-top">Contato</a></li>
          <li class="nav-item"><a class="nav-link" href="admin.php">Área restrita</a></li>
      </ul>
    </div>
  </div>
</nav>
<header class="masthead text-center text-white">
    <div class="masthead-content">
        <div class="container px-5">
            <h1 class="masthead-heading mb-0">Contato</h1>
        </div>
    </div>
</header>
<section class="contato">
  <div class="container px-5">
    <div class="row gx-9 align-items-center">
      <div class="col-lg-6 order-lg-2">
        <img class="img-fluid rounded-circle" src="img/04.jpg"/>
      </div>
    <div class="col-lg-6 order-lg-1">
      <div class="p-5">
          <h2 class="display-4">Informações para contato</h2>
          <p><strong>ENDEREÇOS</strong> :
              Sede Olímpica e Social: Avenida Almirante Barroso 4110, Bairro Souza
              Horário de Funcionamento:
              Segunda a Sexta-feira: das 08:00 às 12:00 horas e 14:00 às 18:00 horas
              Sábado: das 08:00 às 16:00 horas</p>
          <p><strong>EMAILS:</strong>
              Financeiro: financeirotunaluso@hotmail.com
              Secretaria: secretariatuna@hotmail.com
              Recursos Humanos: tunaluso.rh@gmail.com
              Ouvidoria: ouvidor.tuna@gmail.com</p>
          <p>
              <strong>TELEFONES:</strong>
              Financeiro: 91 98995-1950
              Cobrança: 91 98237-6640
              Loja: 91 98331-5949
              Academia: 91 98246-0691
              Secretaria: 91 98523-4925 / 3352-3371
              </p>
      </div>
    </div>
      </div>
    <div class="card" style="width: 40rem;">
      <div class="card-body">
        <h5 class="card-title">Fale conosco</h5>
        <p class="card-text">Campos com * são requeridos</p>
        <form action="acoes.php" method="POST" onsubmit="return concluido()">
            <div class="mb-3">
                <label class="form-label">Nome*</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nome" name="nome" aria-describedby="basic-addon1" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail*</label>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="E-mail" id="email"  name="email" aria-describedby="basic-addon3 basic-addon4" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="basic-url" class="form-label">Assunto*</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Assunto" id="basic-url" name="assunto" aria-describedby="basic-addon3 basic-addon4" required>
                </div>
            </div>
            <div class="mb-3 mensagem">
                <label for="basic-url" class="form-label">Mensagem*</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Mensagem" name="mensagem" aria-describedby="basic-addon3 basic-addon4" required>
                </div>
            </div>
            <button type="submit" name="send_usuario" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>

</section>
<footer class="text-center text-white">
    <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
            <a
                    data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
            ></a>

            <a
                    data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter"></i
            ></a>


            <a
                    data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
            ></a>

            <a
                    data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="dark"
            ><i class="fab fa-flickr"></i
            ></a>

            <a
                    data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="dark"
            ><i class="fab fa-whatsapp"></i
            ></a>

            <a
                    data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="dark"
            ><i class="fab fa-youtube"></i
            ></a>



        </section>
    </div>
    <div class="text-center text-dark p-3">
        <p>Desenvolvido por Iam Silva Melo</p>
    </div>
</footer>
<script src="js/scripts.js"></script>
</body>
