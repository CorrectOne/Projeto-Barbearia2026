<?php
$erro = isset($_GET['erro']) ? $_GET['erro'] : null;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Barbearia</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

<div class="container">


    <?php if ($erro == 1): ?>
        <p>Preencha todos os campos.</p>
    <?php elseif ($erro == 2): ?>
        <p>Email ou senha inválidos.</p>
    <?php endif; ?>

    <form action="../controller/LoginController.php" method="POST">
    <h1>Faça o Login</h1>

    <p>E-mail:</p>
    <input type="email" name="email" required>

    <p>Senha:</p>
    <input type="password" name="senha" required>

    <button type="submit">Entrar</button>

    <a href="cadastro.php">
        <button type="button">Cadastrar</button>
    </a>
    <p></p>

</form>

</div>

</body>
</html>
