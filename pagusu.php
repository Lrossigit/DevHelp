<?php
session_start(); // Inicia a sessão

// Verifica se os dados do usuário estão disponíveis na sessão
if (isset($_SESSION['user_id'])) {
    // Aqui, é melhor buscar os dados do aluno no banco de dados, para garantir consistência.
    include 'db_connect.php'; // Conecta ao banco de dados

    $stmt = $conn->prepare("SELECT nome, email FROM users WHERE id = :id");
    $stmt->bindParam(':id', $_SESSION['user_id']);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $users_nome = $user['nome'];
        $users_email = $user['email'];
    } else {
        // Caso o usuário não exista, encerra a sessão e redireciona ao login
        session_destroy();
        header("Location: login_aluno.html");
        exit;
    }
} else {
    // Redireciona para a página de login se os dados do usuário não estiverem na sessão
    header("Location: log_aluno.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Aluno</title>
    <link rel="stylesheet" href="style_usuario.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div id="banner">
        <img src="imgs/logo.png" alt="logo" class="log_img">
        <nav class="navbar">
            <a class="link" href="index.html">Início</a>
            <a class="link" href="aulas.html">Aulas</a>
            <a class="link" href="materiais.html">Conteúdos</a>
            <a class="link" href="exerc.html">Quiz</a>
            <a class="usu-button" href="pagusu.php">Usuário</a>
            <div class="containerbutton-login">
                <a href="login_aluno.html" class="button-login"> Entrar</a>
            </div>
        </nav>
    </div>

    <div class="usertop">
        <img src="imgs/usu.png" class="img" alt="Imagem do Aluno">
        <h1>Bem-vindo, <?php echo htmlspecialchars($users_nome); ?>!</h1>
        <p>Email: <?php echo htmlspecialchars($users_email); ?></p>
        <a class="button_altsenha" href="altsenha.html">Alterar dados</a>
    </div>
</body>
</html>
