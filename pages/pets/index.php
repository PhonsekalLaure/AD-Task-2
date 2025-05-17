<?php
require BASE_PATH . '/vendor/autoload.php';

require_once BASE_PATH . '/handlers/pageData.handler.php';
require_once BASE_PATH . '/components/templates/foot.component.php';
require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
?>

<?php
head();
?>

<header>
    <h1>Available Pets🦈🐒</h1>
    <p>🐾 Find your perfect furry companion from our loving pet family! 🐾</p>
</header>

<?php
nav($menu)
?>

<main>
    <section>
        <h2>Every tail deserves a happy ending</h2>
        <p>We are dedicated to finding loving homes for our adorable pets. Every pet deserves a second chance, and we’re here to make that happen!</p>
        <a id="button" href="pages/pets/index.php">View Available Pets</a>
    </section>
</main>

<?php
footer();
?>