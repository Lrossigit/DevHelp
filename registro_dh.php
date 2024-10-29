<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre-se</title>
    <link rel="stylesheet" href="style_log.css">
</head>

<body>

    <form action="regis.php" method="post">
        <img src="imgs/logo.png" alt="logo" class="log_img">
        <br><br>
        
        <!-- Campo para Nome -->
        <label for="nome">Primeiro Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite o seu nome" required><br><br>

        <!-- Campo para Sobrenome -->
        <label for="sobrenome">Sobrenome</label>
        <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite o seu sobrenome" required><br><br>

        <!-- Campo para E-mail -->
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Digite o seu e-mail" required><br><br>

        <!-- Campo para Senha -->
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required><br><br>

        <!-- Campo para Confirmar Senha -->
        <label for="confirmarSenha">Confirmar Senha</label>
        <input type="password" id="confirmarSenha" name="confirmarSenha" placeholder="Digite novamente sua senha" required><br><br>

        <!-- Seleção entre Aluno ou Mentor -->
        <label for="tipo_usuario">Cadastrar como:</label>
        <select id="tipo_usuario" name="tipo_usuario" required class="stybot">
            <option value="aluno">Aluno</option>
            <option value="mentor">Mentor</option>
        </select><br><br>

        <div class="container">
            <button type="submit" id="registerBtn">Registrar</button>
            <button type="button" onclick="window.location.href='index.html'">Voltar</button>
        </div>

        <p>Já possui uma conta? <a href="login_dh.html" class="link"> Conecte-se aqui</a>.</p>
    </form>

    <!-- Validação de senha em JavaScript -->
    <script src="config.js">
    </script>
</body>
</html>
