<?php
require 'conectDB.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/ProiectDAW/css/fontawsome/css/all.css">
    <link rel="stylesheet" type="text/css" href="/ProiectDAW/css/fontawsome/fontawesome.css">
    <title>Inregistrare</title>
</head>
<body>

<?php
  
?>
    
<div class="page-container">


    <div class="formular">

        <h2>Register</h2>
        <br>
        <form action="register.php" method="post">
                <input required type="text" name="username" placeholder="Username">
                <br>
                <input required type="password" name="password" placeholder="Password">
                <br>
                <input required type="text" name="nume" placeholder="Nume">
                <br>
                <input required type="text" name="prenume" placeholder="Prenume">
                <br>
                <input required type="email" name="email" placeholder="Email">
                <br>
                <input type="submit" name="trimite" value="Submit">

    </div>
</div>    
</body>
</html>