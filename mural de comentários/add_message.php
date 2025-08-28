<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter a mensagem do formulário
    $message = $_POST["message"];

    // Adicionar a nova mensagem ao array na sessão
    $_SESSION['guestbook_entries'][] = $message;

    // Redirecionar de volta para o livro de visitas
    header("Location: index.php");
    exit();
}
?>