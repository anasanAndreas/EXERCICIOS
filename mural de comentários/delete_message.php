<?php
session_start();

if (isset($_GET['index'])) {
    $index = $_GET['index'];

    // Excluir a mensagem do array na sessão
    if (isset($_SESSION['guestbook_entries'][$index])) {
        unset($_SESSION['guestbook_entries'][$index]);
    }
}

// Redirecionar de volta para o livro de visitas
header("Location: index.php");
exit();
?>
