<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Redireciona para a página específica de acordo com o tipo de usuário
if ($_SESSION['user_tipo'] == 'aluno') {
    header("Location: pagusu.php");  // Página de aluno
    exit;
} else if ($_SESSION['user_tipo'] == 'mentor') {
    header("Location: pagmentor.php");  // Página de mentor
    exit;
}

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_logado']) || $_SESSION['usuario_logado'] !== true) {
    // Redireciona para a página de login se o usuário não estiver logado
    header('Location: log.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina do usuario</title>
    <link rel="stylesheet" href="style_usuario.css">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">

</head>

<body>
    <div id="banner">
        <img src="imgs/logo.png" alt="logo" class="log_img"></a>
        <nav class="navbar">
            <a class="link" href="index.php">Início</a>
            <a class="link" href="aulas.php">Aulas</a>
            <a class="link" href="materiais.php">Conteúdos</a>
            <a class="link" href="exerc.php">Quiz</a>
            <a class="usu-button" href="pag_user.php">Usuário</a>
            <div class="containerbutton-login"><a href="log.php" class="button-login"> Entrar</a>
            </div>
        </nav>
    </div>



    <div class="usertop">
        <img src="imgs/usu.png" class="img">
        <h1>Bem-vindo, <?php echo htmlspecialchars($user['nome']); ?>!</h1>
        <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
        <a class="button_altsenha" href="altsenha.html">Alterar dados</a>
    </div>

</body>

</html>