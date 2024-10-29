<?php
session_start(); // Iniciar a sessão

// Verificar se os dados do mentor estão disponíveis na sessão
if (isset($_SESSION['mentor_id'])) {
    // Buscar os dados do mentor no banco de dados para garantir a consistência
    include 'db_connect.php'; // Conecta ao banco de dados

    $stmt = $conn->prepare("SELECT nome, email FROM mentores WHERE id = :id");
    $stmt->bindParam(':id', $_SESSION['mentor_id']);
    $stmt->execute();
    $mentor = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($mentor) {
        $mentor_nome = htmlspecialchars($mentor['nome']);
        $mentor_email = htmlspecialchars($mentor['email']);
    } else {
        // Caso o mentor não exista, encerra a sessão e redireciona para o login
        session_destroy();
        header("Location: log_prof.html");
        exit;
    }
} else {
    // Redirecionar para a página de login se os dados do mentor não estiverem na sessão
    header("Location: log_prof.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Mentor</title>
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
            <a class="usu-button" href="pagmentor.php">Usuário</a>
            <div class="containerbutton-login">
                <a href="log_prof.html" class="button-login">Entrar</a>
            </div>
        </nav>
    </div>

    <div class="usertop">
        <img src="imgs/usu.png" class="img" alt="Imagem do Mentor">
        <h1>Bem-vindo, <?php echo $mentor_nome; ?>!</h1>
        <p>Email: <?php echo $mentor_email; ?></p>
        <a class="button_altsenha" href="altsenha.html">Alterar dados</a>
    </div>
</body>
</html>
