<?php
include 'inc/init.inc.php';

include 'inc/header.inc.php';
include 'inc/nav.inc.php';
?>

        <h1 class="title">Mon travail </h1>
    </header>

    <main class="portfoliopage">
        <div class="portfolio-box">
            <div class="portfolio-desc">
                <h3>Oupsilon</h3>
                <p>Site réalisé avec Bootstrap bien avant que je m'intéresse au développement web. Le but était de réaliser un site pour soutenir un projet de jeux vidéo.</p>
                <a href="http://oupsilon.free.fr/">Oupsilon.free.fr</a>
            </div>
            <div class="portfolio-img">
                <img src="img/oupsilon.PNG" alt="Image du site web oupsilon">
            </div>
        </div>
        <div class="portfolio-box">
            <div class="portfolio-desc">
                <h3>Trafalgar</h3>
                <p>Simple page d'accueil. Template Figma trouvé sur le web, implémenté en HMTL/CSS "from sratch".</p>
                <a href="exemples/trafalgar/index.html" target="_blank">Voir l'exemple</a>
            </div>
            <div class="portfolio-img">
                <img src="img/trafalgar.png" alt="Image du site web trafalgar">
            </div>
        </div>
        <div class="portfolio-box">
            <div class="portfolio-desc">
                <h3>Sport</h3>
                <p>Exemple de site marchant réalisé au début de ma formation. Fait "from scratch" en HTML et CSS. (Template au format pdf fournis par l'école)</p>
                <a href="exemples/sport/index.html" target="_blank">Voir l'exemple</a>
            </div>
            <div class="portfolio-img">
                <img src="img/sport.png" alt="Image du site web sport.com">
            </div>
        </div>
    </main>


<?php
include "inc/footer.inc.php";
?>