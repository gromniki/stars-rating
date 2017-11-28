<?php
include_once __DIR__ . '/classes/DB.php';

if (isset($_POST['id'], $_POST['points'], $_POST['votes'])) {
    $db = new DB();

    $id = $_POST['id'];
    $points = $_POST['points'];
    $votes = $_POST['votes'];

    $pointsInDB = $db->query('SELECT points FROM articles WHERE id = :id', [':id' => $id]);

    $pointsUpd = ($pointsInDB[0]['points'] + $points);
    $votesUpd = ($votes + 1);

    $sql = 'UPDATE articles SET votes = :votes, points = :points WHERE id = :id';
    $data = [
        ':votes' => $votesUpd,
        ':points' => $pointsUpd,
        ':id' => $id
    ];

    if ($db->query($sql, $data)) {
        $calc = round($pointsUpd / $votesUpd, 1);
        die();
    }
}
