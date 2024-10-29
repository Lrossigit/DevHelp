
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Aluno</title>
    <link rel="stylesheet" href="style_log.css">
</head>
<body>


    <form action="log_al.php" method="post">
        <div class="container">
            <img src="imgs/logo.png" alt="logo" class="log_img">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required><br><br>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required><br><br>
        <a href="esqueceu_senha.php" class="link">Esqueceu sua senha?</a>

        <button type="submit">Entrar</button>
        <button type="button" onclick="window.location.href='index.php'">Voltar</button><br>
        </div>
    </form>

    <script src="firebase-init.js"></script>

</body>
</html>



