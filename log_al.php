<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user['senha'])) {
        // Login com sucesso
        session_start();
        $_SESSION['user_id'] = $user['id'];
        header("Location: pagusu.php");
    } else {
        echo "E-mail ou senha incorretos.";
    }
}

// Verifique o login (exemplo simplificado)
if ($login_sucesso) {
    // Armazena a informação do login na sessão
    $_SESSION['usuario_logado'] = true;
    $_SESSION['usuario_tipo'] = 'aluno';  // ou 'mentor'
    
    // Redireciona para a página de usuário ou mentor
    header('Location: pagusu.php');
    exit();
} else {
    echo "Login falhou. Verifique suas credenciais.";
}

?>
<script src="firebase-init.js"></script>