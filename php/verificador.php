<?php
// Iniciar sessão
include('php/connect.php');
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
$conn->close();
?>
