<?php
require_once __DIR__ . "/../config/conexao.php";

class UsuarioModel {

    public function buscarPorEmail($email) {
        global $conexao;

        $email = mysqli_real_escape_string($conexao, $email);

        $sql = "SELECT * FROM TblUsuario WHERE Email = '$email' LIMIT 1";
        $result = mysqli_query($conexao, $sql);

        return mysqli_fetch_assoc($result);
    }

    
    public function cadastrar($email, $senha, $telefone) {
        global $conexao;

        // 1️⃣ protege contra SQL Injection
        $email    = mysqli_real_escape_string($conexao, $email);
        $telefone = mysqli_real_escape_string($conexao, $telefone);

        // 2️⃣ cria o hash da senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // 3️⃣ monta o SQL
        $sql = "INSERT INTO TblUsuario (Email, Senha, Telefone)
                VALUES ('$email', '$senhaHash', '$telefone')";

        // 4️⃣ executa e retorna true ou false
        return mysqli_query($conexao, $sql);
    }
}
