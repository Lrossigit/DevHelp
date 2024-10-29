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
    <title>Exercicios</title>
    <link rel="stylesheet" href="style_apr.css">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
</head>

<body class="dark_background">

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
    <h1 class="livros_titulo">TESTE O SEU CONHECIMENTO!</h1>
    <svg class="svgcolor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#960C9D" fill-opacity="1"
            d="M0,256L21.8,245.3C43.6,235,87,213,131,176C174.5,139,218,85,262,74.7C305.5,64,349,96,393,144C436.4,192,480,256,524,240C567.3,224,611,128,655,80C698.2,32,742,32,785,58.7C829.1,85,873,139,916,149.3C960,160,1004,128,1047,101.3C1090.9,75,1135,53,1178,85.3C1221.8,117,1265,203,1309,202.7C1352.7,203,1396,117,1418,74.7L1440,32L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z">
        </path>
    </svg>

    <div class="conteiner_2E">
        <div class="item_E">
            <h3>Java</h1>
                <p>Teste seus conhecimentos sobre Java! Esta linguagem robusta e amplamente utilizada é conhecida
                    por
                    sua portabilidade e versatilidade. Responda às perguntas e descubra o quanto você sabe sobre sua
                    sintaxe, principais bibliotecas e aplicações!</p>
                <div class="quiz_aprm">
                    <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAN__jwMspNUMlgzOE1XRkE4NU5NTzRUOEhXMEJYOUY4Qy4u"
                        target="_blank" class="quiz_am">Ir para Quiz</a>
                </div>
        </div>
        <div class="item_E">
            <h3>Javascript</h3>
            <p>Prepare-se para um desafio em JavaScript! Como a espinha dorsal do desenvolvimento web, JavaScript
                adiciona interatividade e dinamismo às páginas. Neste quiz, você vai testar seu entendimento sobre
                suas
                funções, eventos e frameworks populares. Boa sorte!</p>
            <div class="quiz_aprm">
                <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAN__jwMspNUN1BCWkIwVTBPTzZOSjBRUVVDMVBFM041OS4u"
                    target="_blank" class="quiz_am">Ir para Quiz</a>
            </div>
        </div>
        <div class="item_E">
            <h3>C</h3>
            <p>Desafie-se com o quiz de C! Uma das linguagens mais influentes e essenciais, C é a base de muitas
                outras
                linguagens. Teste seu conhecimento sobre suas características, uso em sistemas operacionais e a
                lógica
                de programação por trás dela!</p>
            <div class="quiz_aprm">
                <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAN__jwMspNUQTFDWktaRU5ZWk9CQkFZSUZKWUcyMkZOSy4u"
                    target="_blank" class="quiz_am">Ir para Quiz</a>
            </div>
        </div>
    </div>
    <div class="conteiner_2E">
        <div class="item_E">
            <h3>C++</h1>
                <p>Venha testar suas habilidades em C++! Esta linguagem poderosa combina programação procedural e
                    orientada a objetos. Responda às perguntas e descubra o que você realmente sabe sobre classes,
                    herança e suas aplicações em jogos e sistemas!</p>
                <div class="quiz_aprm">
                    <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAN__jwMspNUN0oxRkhLNlZZSUJJSUFMR0pWVUM3NDNLVC4u"
                        target="_blank" class="quiz_am">Ir para Quiz</a>
                </div>
        </div>
        <div class="item_E">
            <h3>C#</h3>
            <p>Aperte o cinto para o quiz de C#! Desenvolvida pela Microsoft, essa linguagem é amplamente utilizada
                na
                plataforma .NET. Aqui, você pode testar seus conhecimentos sobre suas funcionalidades, tipos de
                dados e
                o ambiente de desenvolvimento!</p>
            <div class="quiz_aprm">
                <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAN__jwMspNUQVVCV1AwSVVFNVFDWEcwWTZBTzJERlRKOC4u"
                    target="_blank" class="quiz_am">Ir para Quiz</a>
            </div>
        </div>
        <div class="item_E">
            <h3>Python</h3>
            <p>Desafie-se com o quiz de Python! Conhecida por sua simplicidade e legibilidade, Python é uma escolha
                popular para diversas áreas, como ciência de dados e desenvolvimento web. Responda às perguntas e
                veja
                como você se sai no mundo dessa linguagem versátil!</p>
            <div class="quiz_aprm">
                <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAN__jwMspNUMVVPQ0hDMTQ4NEU0UEk5RlRKOTVURjREUy4u"
                    target="_blank" class="quiz_am">Ir para Quiz</a>
            </div>
        </div>
    </div>
    <div class="conteiner_2E">
        <div class="item_E">
            <h3>Ruby</h1>
                <p>Mergulhe no quiz de Ruby! Famosa por sua elegância e produtividade, Ruby é especialmente
                    conhecida
                    pelo framework Ruby on Rails. Teste seus conhecimentos sobre suas funcionalidades, sintaxe e
                    como
                    ela transforma o desenvolvimento web!
                </p>
                <div class="quiz_aprm">
                    <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAN__jwMspNUNFRIWVVEOUU3WU5QQjFHWVBIN1BWMDlYTC4u"
                        target="_blank" class="quiz_am">Ir para Quiz</a>
                </div>
        </div>
        <div class="item_E">
            <h3>PHP</h3>
            <p>Teste seu conhecimento em PHP! Esta linguagem de script do lado do servidor é amplamente utilizada
                para
                criar sites dinâmicos. Responda às perguntas e descubra o quanto você sabe sobre suas funções,
                integração com bancos de dados e frameworks!</p>
            <div class="quiz_aprm">
                <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAN__jwMspNUMUE2WUhLOE1FOVNJMFUyNURaN1JHRzAyVy4u"
                    target="_blank" class="quiz_am">Ir para Quiz</a>
            </div>
        </div>
        <div class="item_E">
            <h3>HTML/CSS</h3>
            <p>Venha se testar no quiz de HTML e CSS! Essenciais para o desenvolvimento web, HTML estrutura o
                conteúdo e
                CSS dá vida a ele com estilo. Responda às perguntas e veja como você se sai na criação de páginas
                web
                atraentes e funcionais!</p>
            <div class="quiz_aprm">
                <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=DQSIkWdsW0yxEjajBLZtrQAAAAAAAAAAAAN__jwMspNUQ09NUVMxTkQzRzc0UUtJREZVT1dZTzBJUi4u"
                    target="_blank" class="quiz_am">Ir para Quiz</a>
            </div>
        </div>
    </div>
</body>

</html>