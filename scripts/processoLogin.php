<header>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js"></script>
</header>
<?php
session_start();

// Simular credenciais de usuário para exemplo
$username_correct = "admin";
$password_correct = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $username_correct && $password === $password_correct) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: ../public/index.php"); // Redirecionar para a página inicial ou dashboard
        exit();
    } else {
        echo "<script>alert('Usuário ou senha incorretos!');</script>";
        echo "<script>window.history.back();</script>"; // Retorna ao login
    }
}
?>
<!-- Login Modal -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <form id="loginForm" action="../processes/processa_login.php" method="POST">
            <h2>Login</h2>
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</div>
