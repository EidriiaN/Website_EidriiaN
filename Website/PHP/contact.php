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
    <title>Contact</title>
</head>

<body>
    <?php
    require 'menu.php';
    ?>

    <main>
        <h2 class="title">Contact</h2>
        <p>In aceasta sectiune se regaseste un formular de contact.</p>

        <form action="/ProiectDAW/PHP/submit-form.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message"></textarea><br>
        <input type="submit" value="Submit">
        </form> 

        

    </main>
    <?php

    require 'footer.php';
    ?>

    <script src="js/main.js"></script>
</body>

</html>