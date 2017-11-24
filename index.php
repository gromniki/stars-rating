<?php

require __DIR__ . '/classes/DB.php';
require __DIR__ . '/classes/View.php';


//$db = new DB();

//$sql = 'SELECT * FROM articles ORDER BY id DESC';

//    $view = new View();
//    $view->assign('news', $title)->display(__DIR__ . '/templates/index.php');

//$view = new View();
//$view->display(__DIR__ . '/templates/index.php');

//var_dump( $view->display(__DIR__ . '/templates/index.php') );


$db = new DB();
$articles = $db->query('SELECT * FROM articles ORDER BY id DESC');

$view = new View();
$view->display(__DIR__ . '/templates/index.php');


//include __DIR__ . '/templates/index.php';
