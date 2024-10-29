<?php
session_start();

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
    <title>Materiais de apoio</title>
    <link rel="stylesheet" href="style_apr.css">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
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
    <h1 class="livros_titulo"> ENCONTRE CONTEÚDOS AQUI!</h1>
    <div class="search-container">
        <input type="text" id="search" placeholder="Pesquisar por livros ou linguagens">
        <a href="#" class="search-button" id="search-button">Pesquisar</a>
        <div id="suggestions" class="suggestions"></div>
    </div>

    <svg class="svgcolor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#960C9D" fill-opacity="1"
            d="M0,256L21.8,245.3C43.6,235,87,213,131,176C174.5,139,218,85,262,74.7C305.5,64,349,96,393,144C436.4,192,480,256,524,240C567.3,224,611,128,655,80C698.2,32,742,32,785,58.7C829.1,85,873,139,916,149.3C960,160,1004,128,1047,101.3C1090.9,75,1135,53,1178,85.3C1221.8,117,1265,203,1309,202.7C1352.7,203,1396,117,1418,74.7L1440,32L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z">
        </path>
    </svg>
    <div class="containerlivro" id="book-container">
        <div class="livro">
            <img src="imgs/livro1.png" alt="Livro 1">
            <h3>NODE.JS</h3>
            <a href="node-js.pdf" target="_blank">Adquirir</a>
        </div>
        <div class="livro">
            <img src="imgs/livro2.png" alt="Livro 2">
            <h3>Sistemas Operacionais</h3>
            <a href="so-livro" target="_blank">Adquirir</a>
        </div>
        <div class="livro">
            <img src="imgs/livro.3.png" alt="Livro 3">
            <h3>Programação p/ inicintes</h3>
            <a target="_blank">Adquirir</a>
        </div>
    </div>

    <script src="config.js"></script>
</body>
</html>