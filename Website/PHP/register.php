<?php

    function register(){

        require 'conectDB.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $nume = $_POST['nume'];
        $prenume = $_POST['prenume'];


        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){
            echo "Username is taken.";
            header('Location:/ProiectDaw/PHP/index_register.php?info=gresitNume');
            return;
        }

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){
            echo "Email is taken.";
            header('Location:/ProiectDaw/PHP/index_register.php?info=gresitEmail');
            return;
        }

        $sql = "INSERT INTO users (username, email, nume, prenume, parola, admin) VALUES ('$username', '$email', '$nume', '$prenume', '$password', 0)";
        $result = mysqli_query($conn, $sql);

        mysqli_close($conn);
        header('Location:/ProiectDaw/PHP/index_register.php?info=ok');

    }
?>

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
    <title>Adrian Neagu</title>
</head>

<body>

    <?php
        require 'menu.php';
    ?>
    <main>
        <?php
            register();
        ?>

    </main>


</body>

</html>