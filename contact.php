<?php
include "inc/init.inc.php";

include 'inc/header.inc.php';
include 'inc/nav.inc.php';
?>


        <h1 class="title">Me contacter</h1>
    </header>

    <main>
        <div class="contact-container">
            <div class="contact">
                <div class="logo">
                    <img src="icons/location_on_white_24dp.svg" alt="">
                </div>
                <div class="info-box">
                    <h3>Address</h3>
                    <p>Région parisienne, or télétravail</p>
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
            <h2>M'envoyer un message</h2>
            <p>Hors service, <a id="mailLink" href="">m'envoyer un mail directement</a></p>
            <form action="" method="post">
                <input type="text" name="name" id="name" placeholder="Name" required>
                <input type="email" name="email" id="email" placeholder="email@email.email" required>
                <input type="text" name="objet" id="objet" placeholder="Objet">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
              
                <input class="submit-btn" type="submit" value="Send Message" class="validate" id="sendBtn">
            </form>
        </div>
    </main>

    <script src="js/mail.js"></script>


<?php
include "inc/footer.inc.php";
?>