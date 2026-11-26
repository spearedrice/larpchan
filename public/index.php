<?php declare(strict_types=1);
 require __DIR__ . '/../src/config.php';
 ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= htmlspecialchars(SITE_NAME) ?></title>
</head>
<body> 
<nav>
    [ <?php foreach (BOARDS as $i => $b): ?>
        <?= $i ? '/' : ''?>
        <a href="?b=<?= $b['id'] ?>"><?= $b['id'] ?></a>
        <?php endforeach; ?> ]
    </nav>
<h1><?= htmlspecialchars(SITE_NAME) ?></h1>
</body>


</html>