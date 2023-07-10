<?php
session_start();

// Verificar se a variável de sessão 'user_id' está definida
if (!isset($_SESSION['user'])) {
    // Redirecionar para a página de login ou outra página adequada
    header('Location: login.php');
    exit;
}
else {
    if($_SESSION['user']['role'] == "C") {
        header('Location: login.php');
    }
}

echo "Admin dashboard!";