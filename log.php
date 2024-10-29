<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_log.css">
    <title>Login</title>
</head>
<body>
    <div class="esc_log">
        <form>
            <img src="imgs/logo.png" alt="logo" class="log_img">
            <H1 class="h1">Deseja realizar o login como:</H1>
            <div class="up_bot">
                <button type="button" onclick="window.location.href='login_aluno.php'">Aluno</button>
                <button type="button" onclick="window.location.href='log_prof.php'">Mentor</button>
            </div>
            <div class="bot_al">
                <button type="button" onclick="window.location.href='index.php'">Voltar</button>
            </div>
                <p class="al">Ainda não tem uma conta? <a href="registro_dh.php" class="link">Registre-se aqui</a>.</p>
            </div>
        </form>
    </div>
</body>
</html>