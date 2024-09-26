<?php
// Conectar ao banco de dados
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'devhelper';

$conn = new mysqli($host, $user, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Verificar se o e-mail existe no banco de dados
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Verificar a senha
    $user = $result->fetch_assoc();
    if (password_verify($senha, $user['senha'])) {
        echo "Login realizado com sucesso!";
        // Redirecionar para a página de usuário
        header('Location: pagusu.php?nome=' . urlencode($user['nome']));
    } else {
        echo "Senha incorreta!";
    }
} else {
    echo "Usuário não encontrado!";
}

$conn->close();
?>
