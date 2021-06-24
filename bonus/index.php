<?php
require __DIR__ . '/template/var.php';
require __DIR__ . '/template/head.php';
require __DIR__ . '/template/nav.php';

?>

<main>
    <div class="card" v-for="disk in disks" :key="disk.title" v-if="disk.genre === selected || selected === 'all' ">
        <img :src="disk.poster" :alt="disk.title">
        <div class="card_body">
            <h2>{{disk.title}}</h2>
            <h4>{{disk.author}}</h4>
            <h5>{{disk.genre}}</h5>
            <h6>{{disk.year}}</h6>
        </div>
    </div>

</main>

<?php
require __DIR__ . '/template/footer.php';
