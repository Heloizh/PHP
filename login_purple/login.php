<?php
// Dados fictícios para validação
$valid_username = 'admin';
$valid_password = 'password123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validação simples
    if ($username === $valid_username && $password === $valid_password) {
        echo 'Login bem-sucedido! Bem-vindo, ' . htmlspecialchars($username) . '!';
    } else {
        echo 'Nome de usuário ou senha incorretos.';
    }
}
?>
