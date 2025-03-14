<?php
global $conexao;
session_start();
require "conexao.php";

if(isset($_POST["create_usuario"])){
    $nome = mysqli_real_escape_string($conexao, trim($_POST["nome"]));
    $email = mysqli_real_escape_string($conexao, trim($_POST["email"]));
    $assunto = mysqli_real_escape_string($conexao, trim($_POST["assunto"]));
    $mensagem = mysqli_real_escape_string($conexao, trim($_POST["mensagem"]));


$sql = "INSERT INTO usuarios (nome, email, assunto, mensagem) VALUES  ('$nome', '$email', '$assunto', '$mensagem')";
mysqli_query($conexao, $sql);

if(mysqli_affected_rows($conexao) > 0){
    $_SESSION['mensagem'] = "Usuario criado com sucesso!";
    header("location: admin.php");
    exit;
}
else {
    $_SESSION['mensagem'] = "Nao foi possivel criar o usuario!";
    header("location: admin.php");
    exit;
}
}

if(isset($_POST["update_usuario"])) {

    if (!$conexao) {
        die("Erro na conexão com o banco de dados.");
    }

    $usuario_id = mysqli_real_escape_string($conexao, $_POST["usuario_id"]);
    $nome = mysqli_real_escape_string($conexao, trim($_POST["nome"]));
    $email = mysqli_real_escape_string($conexao, trim($_POST["email"]));
    $assunto = mysqli_real_escape_string($conexao, trim($_POST["assunto"]));
    $mensagem = mysqli_real_escape_string($conexao, trim($_POST["mensagem"]));

    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', assunto = '$assunto', mensagem = '$mensagem' WHERE id = '$usuario_id'";
    mysqli_query($conexao, $sql);
    if(mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = "Usuário atualizado com sucesso!";
        header("location: admin.php");
        exit;
        }
    else {
        $_SESSION['mensagem'] = "Nenhuma alteração feita no usuário.";
        exit;
        header("Location: admin.php");
    }
}

if(isset($_POST["delete_usuario"])) {
    $usuario_id = mysqli_real_escape_string($conexao, $_POST["delete_usuario"]);
    $sql = "DELETE FROM usuarios WHERE id = '$usuario_id'";
    mysqli_query($conexao, $sql);

    if(mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem']= "Usuário excluido com sucesso!";
        header("location: admin.php");
        exit;
    }

    else {
        $_SESSION['mensagem']="Não foi possível excluir o usuário";
        header("location: admin.php");
        exit;
    }
}

if(isset($_POST["send_usuario"])){
    $nome = mysqli_real_escape_string($conexao, trim($_POST["nome"]));
    $email = mysqli_real_escape_string($conexao, trim($_POST["email"]));
    $assunto = mysqli_real_escape_string($conexao, trim($_POST["assunto"]));
    $mensagem = mysqli_real_escape_string($conexao, trim($_POST["mensagem"]));


    $sql = "INSERT INTO usuarios (nome, email, assunto, mensagem) VALUES  ('$nome', '$email', '$assunto', '$mensagem')";
    mysqli_query($conexao, $sql);

    if(mysqli_affected_rows($conexao) > 0){
        $_SESSION['mensagem'] = "Dados enviados com sucesso!";
        header("location: contato.php");
        exit;
    }
    else {
        $_SESSION['mensagem'] = "Nao foi possivel enviar seus dados";
        header("location: contato.php");
        exit;
    }
}
