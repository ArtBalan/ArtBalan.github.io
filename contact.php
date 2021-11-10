<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balandreau Arthur</title>

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Text font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Icon font -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.12.0/devicon.min.css">


</head>
<body>
    <header class="secondpage">
        <div class="bar">
            <div class=" logo"> ArtBaLan
            </div>
            <nav>
                <a href="index.html">Home</a>
                <a href="#">About</a>
                <a href="portfolio.html">Portfolio</a>
                <a href="#">Contact</a>
            </nav>
            <ul class="link-bar">
                <a href="#"><i class="devicon-linkedin-plain"></i></a>
                <a href="https://github.com/ArtBalan" target="blank"><i class="devicon-github-plain"></i></a>
            </ul>
        </div>

        <h1 class="title">Contact me</h1>
    </header>

    <main>
        <div class="contact-container">
            <div class="contact">
                <div class="logo">
                    <img src="icons/location_on_white_24dp.svg" alt="">
                </div>
                <div class="info-box">
                    <h3>Address</h3>
                    <p>92 Haut-de-seine, or Remote</p>
                </div>
            </div>
            <div class="contact">
                <div class="logo">
                    <img src="icons/call_white_24dp.svg" alt="">
                </div>
                <div class="info-box">
                    <h3>Phone</h3>
                    <p>+33 phone placeholder</p>
                </div>
            </div>
            <div class="contact">
                <div class="logo">
                    <img src="icons/email_white_24dp.svg" alt="">
                </div>
                <div class="info-box">
                    <h3>Email</h3>
                    <p>artbalan20@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="form">
            <h2>Get in toutch</h2>
            <p>Out of service, <a id="mailLink" href="">mail me directly</a></p>
            <form action="" method="post">
                <input type="text" name="name" id="name" placeholder="Name" required>
                <input type="email" name="email" id="email" placeholder="email@email.email" required>
                <input type="text" name="site" id="site" placeholder="Website">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
              
                <input class="submit-btn" type="submit" value="Send Message" class="validate" id="sendBtn">
            </form>
        </div>
    </main>

    <footer>

        <p class="copyright-text">Copyright © 2021 All right reserved | Made with <img src="icons/favorite_border_white_24dp.svg" alt=""> by Balandreau Arthur</p>

    </footer>

    <script src="js/script.js"></script>

</body>
</html>