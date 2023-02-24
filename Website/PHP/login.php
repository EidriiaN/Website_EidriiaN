<?php

function login(){
    
        require 'conectDB.php';
        $username = $_POST['username'];
        $password = $_POST['psw'];
    
        $sql = "SELECT * FROM users WHERE username = '$username' and parola = '$password'";
        $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result)>0){
            $_SESSION['username'] = $username;
            $row = mysqli_fetch_array($result);
            if($row['admin']==true){
                $_SESSION['admin']=true;
            }
            $_SESSION['id'] = $row['id'];
            $_SESSION['logat']=true;
            $_SESSION['logat1']=true;
            header('Location:/ProiectDAW/index.php');
        }
        else
            echo "<h2>Nume sau parola invalide.</h2>";

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
            login();
        ?>

    </main>


</body>

</html>