<?php
session_start();

// Inicializa o array de mensagens na sessão, se não existir
if (!isset($_SESSION['guestbook_entries'])) {
    $_SESSION['guestbook_entries'] = array();
}

// Exibir mensagens existentes
$entries = $_SESSION['guestbook_entries'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
    <h1>Guestbook</h1>

    <?php
    // Exibir mensagens existentes
    if (!empty($entries)) {
        echo "<ul>";
        foreach ($entries as $index => $entry) {
            echo "<li>$entry <a href='delete_message.php?index=$index'>Excluir</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhuma mensagem disponível.</p>";
    }
    ?>

    <h2>Adicionar Mensagem</h2>
    <form action="add_message.php" method="post">
        <label for="message">Mensagem:</label>
        <br>
        <textarea name="message" id="message" required></textarea>
        <br>
        <input type="submit" value="Adicionar Mensagem">
    </form>
</body>
</html>