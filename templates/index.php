<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Star Rating</title>

    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

<ul>
    <?php
    foreach ($articles as $article) { ?>
        <li>
            <a href="/single.php?id=<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a>
        </li>
        <?php
    }
    ?>
</ul>

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="/js/scripts.js"></script>
</body>
</html>