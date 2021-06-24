<?php
$title = 'Music Shop';
include __DIR__ . '/dataBase/db_dischi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style.css">
    <title><?= $title ?></title>
</head>

<body>

    <nav>
        <h1><?= $title ?></h1>
    </nav>

    <?php foreach ($cd_musicali as $poster) : ?>
        <div class="card">
            <img src="<?= $poster['poster'] ?>" alt="">
            <div class="card_body">
                <h2>Titolo: <?= $poster['title'] ?></h2>
                <h4>Autore: <?= $poster['author'] ?></h4>
                <h5>Genere: <?= $poster['genre'] ?></h5>
                <h6>Correva l'anno: <?= $poster['year'] ?></h6>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>