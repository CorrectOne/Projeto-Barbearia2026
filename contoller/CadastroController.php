<?php
include "../model/UsuarioModel.php";

// 1️⃣ pega os dados do formulário
$email    = $_POST['email'];
$senha    = $_POST['senha'];
$telefone = $_POST['telefone'];

// 2️⃣ cria o model
$usuarioModel = new UsuarioModel();

// 3️⃣ chama o método de cadastro
$sucesso = $usuarioModel->cadastrar($email, $senha, $telefone);

// 4️⃣ decide o que fazer
if ($sucesso) {
    header("Location: ../view/login.php");
    exit;
} else {

}
