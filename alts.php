<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'devhelper';

// Criar a conexão
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>

<?php
session_start();
include 'conexao.php'; // Inclua o arquivo de conexão ao banco de dados

// Verifique se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    echo "Você precisa estar logado para alterar seus dados.";
    exit;
}

$user_id = $_SESSION['user_id']; // ID do usuário logado

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $novo_email = $_POST['email'];
    $senha_atual = $_POST['senha_atual'];
    $nova_senha = $_POST['nova_senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    // Verificar se a nova senha e a confirmação são iguais
    if ($nova_senha != $confirmar_senha) {
        echo "As senhas não coincidem.";
        exit;
    }

    // Consultar o banco para verificar se a senha atual está correta
    $sql = "SELECT senha FROM user WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($senha_banco);
    $stmt->fetch();

    // Verificar se a senha atual está correta
    if (!password_verify($senha_atual, $senha_banco)) {
        echo "A senha atual está incorreta.";
        exit;
    }

    // Atualizar o email e a senha no banco de dados
    $nova_senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);
    $sql = "UPDATE user SET email = ?, senha = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $novo_email, $nova_senha_hash, $user_id);

    if ($stmt->execute()) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os dados: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
