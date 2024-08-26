<?php
session_start();
session_unset();
session_destroy();

header("Location: ../public/index.php"); // Redirecionar para a página inicial
exit();
?>
