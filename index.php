<?php

require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';

$db = new DB();
$articles = $db->query('SELECT * FROM articles ORDER BY id DESC');

//$view = new View();
//$view->assign('articles', $articles)->display(__DIR__ . '/templates/index.php');

include __DIR__ . '/templates/index.php';
