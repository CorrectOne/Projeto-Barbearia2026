<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require_once __DIR__ . "/../model/UsuarioModel.php";

if (!isset($_POST['email']) || !isset($_POST['senha'])) {
    header("Location: ../view/login.php?erro=1");
    exit;
}

$email = trim($_POST['email']);
$senha = $_POST['senha'];

$usuarioModel = new UsuarioModel();
$usuario = $usuarioModel->buscarPorEmail($email);

if ($usuario && password_verify($senha, $usuario['Senha'])) {
    $_SESSION['idUsuario'] = $usuario['IdUsuario'];
    $_SESSION['email'] = $usuario['Email'];

    header("Location: ../view/home.php");
    exit;
}

