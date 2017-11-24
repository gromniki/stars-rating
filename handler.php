<?php
include_once __DIR__ . '/classes/DB.php';

if (isset($_POST['id'], $_POST['points'], $_POST['votes'])) {
    $db = new DB();

    $id = $_POST['id'];
    $points = $_POST['points'];
    $votes = $_POST['votes'];

    //$votes = $db->query('SELECT votes FROM articles WHERE id = :id');

    $sql = 'UPDATE articles SET votes = :votes, points = :points WHERE id = :id';
    $data = [
        ':votes' => $votes,
        ':points' => $points,
        ':id' => $id
    ];






//    $article = $_GET['article'];
//    if (in_array($rating, [1, 2, 3, 4, 5])) {
//        $exists = $db->query('SELECT id FROM articles WHERE id = {$article}')->num_rows ? true : false;
//
//        if ($exists) {
//            $db->query('INSERT INTO articles_ratings (article, rating) VALUES ({$article}, {$rating})');
//        }
//    }


//    $id = $_POST['id'];
//    $points = $_POST['points'];
//
//    $rateActual = $db->query('SELECT votes, points FROM articles WHERE id = :id');
//
//    $pointsUpdate = ($rateActual['points'] + $points);
//    $votesUpdate = ($rateActual['votes'] + 1);
//
//    $sql = 'UPDATE articles SET votes = :votes, points = :points WHERE id = :id';
//    $data = [
//        ':votes' => $votesUpdate,
//        ':points' => $pointsUpdate,
//        ':id' => $id
//    ];
//
//    if (!$result = $db->execute($sql, $data)) {
//        http_response_code(500);
//        die('Ошибка при вставке записи');
//    }
//
//    header('Location: /');
//    exit();


//    foreach ($rateActual as $rateUpdate) {
//        $pointsUpdate = ($rateUpdate['points'] + $points);
//        $votesUpdate = ($catchArticle['votes'] + 1);
//    }


//    $sql = 'UPDATE articles SET votes = :votes, points = :points WHERE id = :id';
//    $data222 = [
//        ':votes' => $votes,
//        ':points' => $_POST['points'],
//        ':id' => $_POST['id']
//    ];
//
//    $sql = 'INSERT INTO news (title, body, author) VALUES (:title, :body, :author)';
//    $data = [
//        ':title'  => $_POST['title'],
//        ':body'   => $_POST['body'],
//        ':author' => $_POST['author']
//    ];

//    $id = (int)$_POST['id'];
//    $points = (int)$_POST['points'];
//
//
//
//    $sql = 'SELECT votes, points FROM articles WHERE id=:id';
//
//    $catchArticle = $db->query($sql, [':id' => $id]);
//
//    while ($catchArticle) {
//        $pointsUpdate = ($catchArticle['points'] + $points);
//        $votesUpdate = ($catchArticle['votes'] + 1);
//
//        $sqlUpd = 'UPDATE articles SET votes = ?, points = ?, WHERE id = :id';
//
//        //$updateArticle = $db->execute($sqlUpd, [$votesUpdate, $pointsUpdate, ':id' => $id]);
//
//        if ($db->query($sqlUpd, [$votesUpdate, $pointsUpdate, ':id' => $id])) {
//            $calc = round(($pointsUpdate / $votesUpdate), 1);
//            die(json_encode(['average' => $calc, 'votes' => $votesUpdate]));
//        }
//    }
}




//if (isset($_POST['rate'])) {
//    $id = (int)$_POST['id'];
//    $points = (int)$_POST['points'];
//
//    $db = new DB();
//
//    $sql = 'SELECT votes, points FROM articles WHERE id=:id';
//
//    $catchArticle = $db->query($sql, [':id' => $id]);
//
//    while ($catchArticle) {
//        $pointsUpdate = ($catchArticle['points'] + $points);
//        $votesUpdate = ($catchArticle['votes'] + 1);
//
//        $sqlUpd = 'UPDATE articles SET votes = ?, points = ?, WHERE id = :id';
//
//        //$updateArticle = $db->execute($sqlUpd, [$votesUpdate, $pointsUpdate, ':id' => $id]);
//
//        if ($db->query($sqlUpd, [$votesUpdate, $pointsUpdate, ':id' => $id])) {
//            $calc = round(($pointsUpdate / $votesUpdate), 1);
//            die(json_encode(['average' => $calc, 'votes' => $votesUpdate]));
//        }
//    }
//}

//var_dump($catchArticle);


//    $pegaArtigo = $pdo->prepare("SELECT votos, pontos FROM `artigos` WHERE `id` = ?");
//    $pegaArtigo->execute(array($id));
//
//    while ($row = $pegaArtigo->fetchObject()) {
//        $pointsUpdate = ($row->pontos + $points);
//        $votesUpdate = ($row->votos + 1);
//
//        $atualizaArtigo = $pdo->prepare("UPDATE `artigos` SET `votos` = ?, `pontos` = ? WHERE `id` = ?");
//        if ($atualizaArtigo->execute(array($votesUpdate, $pointsUpdate, $id))) {
//            $calculo = round(($pointsUpdate / $votesUpdate), 1);
//            die(json_encode(array('average' => $calculo, 'votos' => $votesUpdate)));
//        }
//    }

