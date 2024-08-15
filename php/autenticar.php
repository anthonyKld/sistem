<?php
include('connect.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senha_criptografada = md5($senha);

    $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $senha_criptografada);
    $stmt->execute();
    $result = $stmt->get_result();
    $dados = $result->fetch_assoc();

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $email;
        $_SESSION['nomeUsuario'] = $dados['nome'];
        header("Location: ../"); // Redirecionar para index.php
        exit();
    } else {
        $_SESSION['erro'] = "E-mail ou senha incorretos.";
        header("Location: ../login.php"); // Redirecionar para login.php com mensagem de erro
        exit();
    }
} else {
    $_SESSION['erro'] = "E-mail ou senha incorretos.";
    header("Location: ../login.php"); // Redirecionar para login.php com mensagem de erro
    exit();
}
$conn->close();
?>
