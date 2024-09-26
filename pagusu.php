<?php
if (isset($_GET['nome'])) {
    $nome = htmlspecialchars($_GET['nome']);
} else {
    $nome = "Usuário";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina do usuario</title>
    <link rel="stylesheet" href="style_usuario.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</head>
<body>
    <div id="banner">
        <img src="logo.png" alt="logo" class="log_img"></a>
        <nav class="navbar">
            <a href="index.html">Página inicial</a>
            <a href="aulas.html">Aulas</a>
            <a href="materiais.html">Materiais</a>
            <a href="pag_user.html">Pagina do usuario</a>
            <a href="login_dh.html" class="">
                <img src="usu.png" alt="usuário" class="usu_icone">
            </a>
        </nav>
    </div>
    <div class="usertop">
        <a href="altsenha.html">
            <img src="usu.png" alt="" class="img">
        </a>
        <h1 class="t">Bem-vindo, <?php echo $nome; ?>!</h1>
        <p class="t">Esta é sua página de usuário.</p>
    </div>

</body>
</html>
