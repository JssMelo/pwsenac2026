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
            <img src="<?= BASE_URL ?>img/foto1.jpg" alt="Faltam 02 dias">
            <img src="<?= BASE_URL ?>img/foto2.jpg" alt="Faltam 05 dias">
            <img src="<?= BASE_URL ?>img/foto3.jpg" alt="Tema 2026">
        </div>
    </section>

    <section class="card">
        <h2>Como chegar</h2>

        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d804.2405615141781!2d-42.57845574058144!3d-4.765804116214492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1spt-BR!2sbr!4v1771282325376!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
