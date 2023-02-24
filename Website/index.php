<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <script src="https://kit.fontawesome.com/33c1bca693.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" type="text/css" href="css/fontawsome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/fontawsome/fontawesome.css">
    <title>Adrian Neagu</title>
</head>

<body>
    <?php
    require 'PHP/menu.php';

    if (isset($_SESSION['logat'])) {

        echo '
            <div class="popup">
                <h3>Te-ai logat cu succes</h2>
            </div>';
        unset($_SESSION['logat']);
    }
    ?>

    <main>
        <h2 class="title">Prezentare</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis dicta enim, autem commodi ratione quidem
            perspiciatis vitae excepturi blanditiis sunt qui nemo sint totam distinctio aliquam pariatur doloremque
            dolores laborum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, fuga error quidem quibusdam iure
            velit possimus vero illo nostrum, iste quo iusto repudiandae qui in, consectetur explicabo omnis. Cumque,
            impedit.</p>
        <a target="_blank" href="https://eidriian.itch.io/slime-eater">
            <img src="resources/slimeEater.png" alt="slimeEater" class="intro-img">
        </a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum odio commodi aliquid quidem atque cum,
            reprehenderit soluta, velit inventore architecto voluptatem vel reiciendis numquam eligendi ut
            necessitatibus, accusantium neque odit?
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, nihil quibusdam, suscipit inventore hic
            eligendi dolores doloribus debitis delectus atque minima libero labore quos ex magnam reprehenderit? Nobis,
            quod modi.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem soluta temporibus eius excepturi eaque quos est? Dolorum commodi voluptatibus enim iusto ad, obcaecati, temporibus et perferendis aspernatur, quisquam harum numquam.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto unde modi minima? Dolores, excepturi? At nihil sit rem doloremque optio necessitatibus aut nobis quam molestias accusantium illum sunt, cupiditate ab accusamus itaque vero dolorum delectus incidunt cumque saepe? In porro nostrum obcaecati reprehenderit. Corrupti aspernatur, quam alias inventore repellat eum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ratione eum voluptate saepe, magnam, asperiores velit maiores at nihil commodi ipsam explicabo impedit cum facere possimus inventore corrupti atque temporibus! Temporibus magnam cupiditate vitae iusto possimus molestiae, amet dolore, porro quos sequi magni numquam ratione. Quas in sapiente ullam animi facilis deleniti ipsam et iure a vero, assumenda, voluptas eius adipisci libero eos esse reprehenderit possimus blanditiis itaque atque inventore. Officia, incidunt vel. Illum rerum corrupti dolorum quisquam illo, totam consectetur fuga est impedit cupiditate molestias dolorem, atque iure nostrum ab quos asperiores tempore tempora doloremque dignissimos fugit optio! Ipsam?

        </p>

    </main>
    <?php

    require 'PHP/footer.php';
    ?>

    <script src="js/main.js"></script>
</body>

</html>