<?php

require('db.php');

$db = new DB();
$count = $db->getConnection()->exec('UPDATE items SET stock = stock + 1');
header("Location: /index.php");

