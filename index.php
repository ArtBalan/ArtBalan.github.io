<?php
include "inc/init.inc.php";

include "inc/header.inc.php";
?>
<body>
	<div class="burger" id="burger">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>

    <!-- HEADER -->
    <header class="mainpage">
				    <div class="bar" id="bar">
            <div class="logo"> ArtDev
            </div>
            <nav>
                <a href="index.php" <?php echo ($currentPage == 'index.php')? "class='active'" : ""; ?> >Home</a>
                <a href="about.php" <?php echo ($currentPage == 'about.php')? "class='active'" : ""; ?>>A propos</a>
                <a href="portfolio.php" <?php echo ($currentPage == 'portfolio.php')? "class='active'" : ""; ?>>Portfolio</a>
                <a href="contact.php" <?php echo ($currentPage == 'contact.php')? "class='active'" : ""; ?>>Contact</a>
            </nav>
            <ul class="link-bar">
                <a href="https://fr.linkedin.com/in/arthur-balandreau-b3a752220"><i class="devicon-linkedin-plain"></i></a>
                <a href="https://github.com/ArtBalan" target="blank"><i class="devicon-github-plain"></i></a>
            </ul>
        </div>
        <div class="banner">
           <!-- <img src="img/profil-picture.png" alt="My ugly face">-->
            <div class="box">
                <h1>Balandreau</h1>
                <h1>Arthur</h1>
            </div>
        </div>
    </header>
<main>
    
    <a href="#services" id="services"><div class="arrow">
        <img src="icons/expand_more_white_24dp.svg" alt="">
    </div></a>
        
        <!-- SERVICES -->
    <div class="services">
        <div class="col">
            <div class="box">
                <h3>Mes services</h3>
                <h1>Qui suis-je ?</h1>
                <div class="line"></div>
                <p>Mordu d'informatique depuis plus de 5 ans, je me spécialise dans le développement web au sein de l'école Webforce 3 à Paris. Je suis à votre disposition si vous rechercher un alternant en développement web.</p>
                <a href="docs/CV-BALANDREAU-Arthur.pdf" class="cv-btn" target="_blank">
                    Curiculum Vitae
                </a>
            </div>
        </div>
        <div class="col">
            <div class="box">
                <div class="box-icon">
                    <i class="devicon-devicon-plain"></i>
                </div>
                <h2>Front End</h2>
                <p>Mes competences en HTML5 et CSS me permettent de donner vie à vos projets, tout en les rendant responsive. De plus je suis capable d'utiliser des frameworks tel que Bootstrap.</p>
            </div>

            <div class="box">
                <div class="box-icon">
                    <i class="devicon-devicon-plain"></i>
                </div>
                <h2>Informatique</h2>
                <p>Durant mon parcours scolaire, j'ai pu découvrir d'autre langage de programmation tel que le C# (que j'adore tout particulièrement) et le Python. </p>
            </div>
        </div>

        <div class="col">
            <div class="box">
                <div class="box-icon">
                    <i class="devicon-devicon-plain"></i>
                </div>
                <h2>Backend</h2>
                <p>Le monde du backend ne m'est pas inconnu, en effet je possède déjà des bases en PHP et MYSQL. Connaissances qui seront approfondies lors de ma formation.</p>
            </div>
            
            <div class="box">
                <div class="box-icon">
                    <i class="devicon-devicon-plain"></i>
                </div>
                <h2>En plus</h2>
                <p>En plus de savoir coder, je suis capable d'utiliser les logiciels de bureautique tels que la suite office, le logiciel de versionnage Git. Mais aussi des logiciels artistique comme figma, photoshop et blender.</p>
            </div>
        </div>
    </div>

    .

</main>


<?php
include "inc/footer.inc.php";
?>
