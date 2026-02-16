<?php
require_once __DIR__ . '/../includes/config.php';

$pageTitle = "Início";

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';

?>

<main class="container">

    <section class="banner">
        <h2>Uma experiência de fé e comunhão</h2>
        <a href="<?= BASE_URL ?>public/cadastro.php" class="btn">
            Quero participar
        </a>
    </section>

    <section class="card">
        <h2>Sobre o evento</h2>
        <p>
            Um encontro de fé, adoração e unidade. Um tempo preparado
            para fortalecer vidas e celebrar o Senhor.
        </p>
    </section>

    <section class="card destaque">
        <h2>Doação</h2>
        <p>Ajude na realização do evento.</p>
        <strong>Chave PIX:</strong> pix@festival.com
    </section>

    <section class="card">
        <h2>Galeria</h2>

        <div class="grid-3">
            <img src="<?= BASE_URL ?>img/foto1.jpg" alt="">
            <img src="<?= BASE_URL ?>img/foto2.jpg" alt="">
            <img src="<?= BASE_URL ?>img/foto3.jpg" alt="">
        </div>
    </section>

    <section class="card">
        <h2>Como chegar</h2>

        <div class="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb="
                loading="lazy">
            </iframe>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
