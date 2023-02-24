<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/ProiectDAW/css/style.css">
    <!-- <script src="https://kit.fontawesome.com/33c1bca693.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" type="text/css" href="/ProiectDAW/css/fontawsome/css/all.css">
    <link rel="stylesheet" type="text/css" href="/ProiectDAW/css/fontawsome/fontawesome.css">
    <title>Proiecte</title>
</head>

<body>
    <?php
    require 'menu.php';

    if (isset($_SESSION['logat'])) {

        echo '
            <div class="popup">
                <h3>Te-ai logat cu succes</h2>
            </div>';
        unset($_SESSION['logat']);
    }
    ?>

    <main>
        <h2 class="title">Proiecte</h2>
        <p>In aceasta sectiune se pot regasi proiectele la care am lucrat sau care sunt in curs de finalizare.</p>
        <div class="proiecteFlex">

            <div class="proiect1">
                <h3>Slime Eater</h3>
                <p>Joc video de tip platformer, realizat cu Unity.</p>
                <a href="https://eidriian.itch.io/slime-eater" target="_blank" class="button">Salt catre proiect
                    <i class="fa-brands fa-github fa-lg"></i>
                </a>
            </div>
            <div class="proiect1">
                <h3>Sistem pentru management mese restaurant</h3>
                <p>Program scris in java in timpul studiului.</p>
                <a href="https://github.com/EidriiaN/Rezervare_mese_restaurant.git" target="_blank" class="button">Salt catre proiect
                    <i class="fa-brands fa-github fa-lg"></i>
                </a>
            </div>
            <!-- <div class="proiect1">
                <h3>Slime Eater</h3>
                <p>Joc video de tip platformer</p>
            </div>
            <div class="proiect1">
                <h3>Slime Eater</h3>
                <p>Joc video de tip platformer</p>
            </div> -->

        </div>


    </main>

    <?php

    require 'footer.php';
    ?>
    <script src="js/main.js"></script>
</body>

</html>