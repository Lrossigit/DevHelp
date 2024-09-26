<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'devhelper';

$conn = new mysqli($host, $user, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmarSenha'];

// Verificar se as senhas coincidem
if ($senha !== $confirmar_senha) {
    echo "As senhas não coincidem!";
    exit();
}


$senha_hash = password_hash($senha, PASSWORD_BCRYPT);

$sql = "INSERT INTO users (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha_hash')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
