<?php
session_start();

if (!isset($_SESSION['idUsuario'])) {
    header("Location: ../view/login.php?erro=3");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home - Barbearia</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

<div class="container">
    <h1>Bem-vindo</h1>
    <p>Usuário logado: <?php echo $_SESSION['email']; ?></p>

    <a href="../controller/LogoutController.php">
        <button>Sair</button>
    </a>
</div>

</body>
</html>
