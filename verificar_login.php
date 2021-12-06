<?php
session_start();

$usuarioCorreto = "jose";
$senhaCorreta = "123456";

if (isset($_POST['entrar'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login == $usuarioCorreto && $senha == $senhaCorreta) {
        $_SESSION["msg"] = "Você está logado!";
        $_SESSION["logado"] = true;
    } else {
        $_SESSION["msg"] = "Usuário ou senha inválidos.";
        $_SESSION["logado"] = false;
    }
}


if (isset($_SESSION['logado']) && $_SESSION['logado']) {
    header("location: index.php");
} else {
    header("location: login.php");
}
