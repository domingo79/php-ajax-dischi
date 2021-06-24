<main>
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
</main>