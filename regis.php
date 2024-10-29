<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha
    $confirmarSenha = $_POST['confirmarSenha'];
    $tipo_usuario = $_POST['tipo_usuario'];

    if ($_POST['senha'] !== $_POST['confirmarSenha']) {
        echo "As senhas não coincidem!";
    } else {
        try {
            if ($tipo_usuario == 'aluno') {
                // Cadastro de aluno
                $stmt = $conn->prepare("INSERT INTO users (nome, sobrenome, email, senha) VALUES (:nome, :sobrenome, :email, :senha)");
            } else {
                // Cadastro de mentor
                $stmt = $conn->prepare("INSERT INTO mentores (nome, sobrenome, email, senha) VALUES (:nome, :sobrenome, :email, :senha)");
            }
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':sobrenome', $sobrenome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();

            echo "Cadastro realizado com sucesso!";
            header("Location: log.php");
        } catch(PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
}

?>

<script src="firebase-init.js"></script>