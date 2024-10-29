<?php
$host = 'localhost';  // Ou o endereço do seu servidor de banco de dados
$dbname = 'devhelper';  // Nome do banco de dados
$username = 'root';   // Usuário do banco de dados
$password = '';       // Senha (por padrão no XAMPP é vazio)

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configurar o modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
}
?>

<script src="firebase-init.js"></script>