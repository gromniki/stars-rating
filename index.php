<?php

require __DIR__ . '/classes/DB.php';

$db = new DB();
$articles = $db->query('SELECT * FROM articles ORDER BY id DESC');

include __DIR__ . '/templates/index.php';
