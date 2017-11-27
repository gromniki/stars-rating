<?php

require __DIR__ . '/classes/DB.php';

$id = (int)$_GET['id'];

$db = new DB();
$article = $db->query('SELECT * FROM articles WHERE id = :id', [':id' => $id]);

include __DIR__ . '/templates/single.php';
