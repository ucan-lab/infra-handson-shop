<?php

require('db.php');

$db = new DB();
$stmt = $db->getConnection()->query('SELECT * FROM items');
$rows = $stmt->fetchAll();

foreach ($rows as $row) {
    echo $row['name'] . ': ' . $row['stock'] . '<br>';
}
?>
<p><a href="/add_item.php">add item</a></p>
<p><a href="/update_stock.php">update stock</a></p>
<p><a href="/clear_items.php">clear items</a></p>

