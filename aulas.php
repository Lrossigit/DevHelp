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
    <title>Aulas devhelp</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">

</head>

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

    <div class="banner2">
        <a href="#secao1">Java</a>
        <a href="#secao2">Javascript</a>
        <a href="#secao3">C</a>
        <a href="#secao4">C++</a>
        <a href="#secao5">C#</a>
        <a href="#secao6">Python</a>
        <a href="#secao7">Ruby</a>
        <a href="#secao8">PHP</a>
        <a href="#secao9">HTML/CSS</a>

    </div>

    <div class="video-principal">
        <iframe id="youtube-video" src=""></iframe>
        <div id="secao0" class="content-section"></div>
    </div>
    <div id="containeraulas">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#292a35" fill-opacity="1"
                d="M0,256L24,266.7C48,277,96,299,144,256C192,213,240,107,288,90.7C336,75,384,149,432,149.3C480,149,528,75,576,53.3C624,32,672,64,720,112C768,160,816,224,864,218.7C912,213,960,139,1008,112C1056,85,1104,107,1152,96C1200,85,1248,43,1296,37.3C1344,32,1392,64,1416,80L1440,96L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
            </path>
        </svg>

        <section id="secao1">
            <h2>Java</h2>
            <a href="#" class="play-button" data-video-id="sZAxLRMxEUo?si=Nz_0ecvCRXwrPOZO"><img src="imgs/1java.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="K8bexGgIyBw?si=b2IykdFaOtW99QL1"><img src="imgs/2java.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="iOeebAM_C5g?si=364NlvUjoGJ-zB-A"><img src="imgs/3java.png"
                    alt=""></a>
        </section>

        <section id="secao2">
            <h2>Javascript</h2>
            <a href="#" class="play-button" data-video-id="sZAxLRMxEUo?si=Nz_0ecvCRXwrPOZO"><img src="imgs/1js.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="K8bexGgIyBw?si=b2IykdFaOtW99QL1"><img src="imgs/2js.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="iOeebAM_C5g?si=364NlvUjoGJ-zB-A"><img src="imgs/3js.png"
                    alt=""></a>
        </section>

        <section id="secao3">
            <h2>C</h2>
            <a href="#" class="play-button" data-video-id="sZAxLRMxEUo?si=Nz_0ecvCRXwrPOZO"><img src="imgs/1C.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="K8bexGgIyBw?si=b2IykdFaOtW99QL1"><img src="imgs/2C.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="iOeebAM_C5g?si=364NlvUjoGJ-zB-A"><img src="imgs/3C.png"
                    alt=""></a>
        </section>

        <section id="secao4">
            <h2>C++</h2>
            <a href="#" class="play-button" data-video-id="sZAxLRMxEUo?si=Nz_0ecvCRXwrPOZO"><img src="imgs/1Cpp.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="K8bexGgIyBw?si=b2IykdFaOtW99QL1"><img src="imgs/2Cpp.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="iOeebAM_C5g?si=364NlvUjoGJ-zB-A"><img src="imgs/3Cpp.png"
                    alt=""></a>

        </section>
        <section id="secao5">
            <h2>C#</h2>
            <a href="#" class="play-button" data-video-id="sZAxLRMxEUo?si=Nz_0ecvCRXwrPOZO"><img src="imgs/1CS.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="K8bexGgIyBw?si=b2IykdFaOtW99QL1"><img src="imgs/2CS.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="iOeebAM_C5g?si=364NlvUjoGJ-zB-A"><img src="imgs/3CS.png"
                    alt=""></a>

        </section>
        <section id="secao6">
            <h2>Python</h2>
            <a href="#" class="play-button" data-video-id="sZAxLRMxEUo?si=Nz_0ecvCRXwrPOZO"><img src="imgs/1Python.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="K8bexGgIyBw?si=b2IykdFaOtW99QL1"><img src="imgs/2Python.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="iOeebAM_C5g?si=364NlvUjoGJ-zB-A"><img src="imgs/3Python.png"
                    alt=""></a>
        </section>

        <section id="secao7">
            <h2>Ruby</h2>
            <a href="#" class="play-button" data-video-id="sZAxLRMxEUo?si=Nz_0ecvCRXwrPOZO"><img src="imgs/1Ruby.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="K8bexGgIyBw?si=b2IykdFaOtW99QL1"><img src="imgs/2Ruby.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="lbZNzqb38Kk?si=EU9jM09jZGfvkOCS"><img src="imgs/3Ruby.png"
                    alt=""></a> 
        </section>

        <section id="secao8">
            <h2>PHP</h2>
            <a href="#" class="play-button" data-video-id="sZAxLRMxEUo?si=Nz_0ecvCRXwrPOZO"><img src="imgs/1PHP.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="K8bexGgIyBw?si=b2IykdFaOtW99QL1"><img src="imgs/2PHP.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="iOeebAM_C5g?si=364NlvUjoGJ-zB-A"><img src="imgs/3PHP.png"
                    alt=""></a>
        </section>

        <section id="secao9">
            <h2>HTML/CSS</h2>
            <a href="#" class="play-button" data-video-id="sZAxLRMxEUo?si=Nz_0ecvCRXwrPOZO"><img src="imgs/1HTML_CSS.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="K8bexGgIyBw?si=b2IykdFaOtW99QL1"><img src="imgs/2HTML_CSS.png"
                    alt=""></a>
            <a href="#" class="play-button" data-video-id="iOeebAM_C5g?si=364NlvUjoGJ-zB-A"><img src="imgs/3HTML_CSS.png"
                    alt=""></a>
        </section>
    </div>

   
    <script src="config.js"></script>

</body>

</html>