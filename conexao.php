<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "pw_db");

$conexao = mysqli_connect(HOST, USER, PASS, DB) or die("Nao foi possivel conectar");
?>
