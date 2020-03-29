<?php

require('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $stock = $_POST['stock'] ?? 0;

    $db = new DB();
    $stmt = $db->getConnection()->prepare('INSERT INTO items (name, stock) VALUES (?, ?)');
    $stmt->execute([$name, $stock]);

    header("Location: /index.php");
}
?>
<form method="POST">
    <input type="text" name="name" maxlength="30" required>
    <input type="number" name="stock" min="0" max="1000" required>
    <button type="submit">add</button>
</form>

