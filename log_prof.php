<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_log.css">
    <title>Login Mentor</title>
</head>
<body>
    <form action="log_pf.php" method="post" id="formLogin">
        <img src="imgs/logo.png" alt="logo" class="log_img">
        <br>
        <div class="container">
            <img src="imgs/logo.png" alt="logo" class="log_img">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Informe seu e-mail"required><br>
            <br>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Informe sua senha" required><br>
            <a href="esqueceu_senha.php" class="link">Esqueceu sua senha?</a><br>
            <button type="submit" onclick="window.location.href='pagmentor.php'">Entre</button>
            <button type="button" onclick="window.location.href='index.php'">Voltar</button>
        </div>
    </form>

    <script src="firebase-init.js"></script>

</body>
</html>