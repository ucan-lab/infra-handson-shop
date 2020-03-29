<?php

require('db.php');

$db = new DB();
$stmt = $db->getConnection()->query('DELETE FROM items');
header("Location: /index.php");

