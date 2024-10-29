<?php
// Iniciar a sessão
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Incluir a conexão com o banco de dados
    include 'db_connect.php';

    // Filtrar o e-mail enviado pelo formulário
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if ($email) {
        // Verificar se o e-mail está registrado no banco de dados
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Gerar um token único para redefinição de senha
            $token = bin2hex(random_bytes(50));

            // Armazenar o token na tabela 'esqueceu_senha' com o ID do usuário
            $stmt = $conn->prepare("INSERT INTO esqueceu_senha (user_id, token) VALUES (:user_id, :token)");
            $stmt->bindParam(':user_id', $user['id']);
            $stmt->bindParam(':token', $token);
            $stmt->execute();

            // Gerar o link de redefinição de senha
            $reset_link = "http://localhost/reset_password.php?token=$token";

            // Enviar o e-mail com o link de redefinição de senha
            $subject = "Redefinição de senha";
            $message = "Clique no link para redefinir sua senha: $reset_link";
            $headers = "From: no-reply@devhelp.com";

            if (mail($email, $subject, $message, $headers)) {
                echo "Instruções de redefinição de senha enviadas para o seu e-mail.";
            } else {
                echo "Falha ao enviar o e-mail.";
            }
        } else {
            echo "E-mail não encontrado.";
        }
    } else {
        echo "E-mail inválido.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" href="style_log.css">
</head>
<body>
    <h2>Recuperar Senha</h2>
    <form action="" method="post">
        <label for="email">Digite seu e-mail para recuperar a senha:</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required><br><br>
        <button type="submit">Enviar</button>
    </form>

    <script src="firebase-init.js"></script>
</body>
</html>
