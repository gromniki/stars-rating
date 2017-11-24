<?php require __DIR__ . '/../classes/DB.php'; ?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Статья</title>

    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<?php
$id = (int)$_GET['id'];

$db = new DB();

foreach ($db->query('SELECT * FROM articles WHERE id = :id', [':id' => $id]) as $article) {
    $calc = ($article['points'] == 0) ? 0 : round(($article['points'] / $article['votes']), 1);
    ?>

    <a href="/">Назад</a>
    <h1><?php echo $article['title']; ?></h1>

    <span class="ratingAverage" data-average="<?php echo $calc; ?>"></span>
    <span class="article" data-id="<?php echo $id; ?>"></span>

    <div class="stars__wrapper">
        <span class="bg"></span>
        <div class="stars">
            <?php
            $i = 1;
            while ($i <= 5) {
                ?>
                <div class="star" data-vote="<?php echo $i++;?>">
                    <span class="starAbsolute"></span>
                </div>
            <?php } ?>
        </div>
    </div>
    <p class="average">Средняя оценка: <span><?php echo $calc ?: 'Нет оценки'; ?></span></p>
    <p class="votes">Голосов: <span><?php echo $article['votes'] ?: 'Будь первым, кто проголосует'; ?></span></p>

    <?php
}
?>

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="/js/scripts.js"></script>
</body>
</html>