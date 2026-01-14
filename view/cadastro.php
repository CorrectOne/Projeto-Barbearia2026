<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

<div class="container">
    <h1>Cadastro</h1>

    <form action="../controller/CadastroController.php" method="POST">

        <p>E-mail:</p>
        <input type="email" name="email" required>

        <p>Senha:</p>
        <input type="password" name="senha" required>

        <p>Telefone:</p>
        <input type="text" name="telefone" required>

        <button type="submit">Cadastrar</button>

    </form>
</div>

</body>
</html>
