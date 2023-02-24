<?php

function serviciiIn()
{
    require 'conectDB.php';

    if (!empty($_POST['check_list'])) {
        foreach ($_POST['check_list'] as $check) {
            $id_user = $_SESSION['id'];
            $sql = "INSERT INTO comenzi (id_user ,id_serviciu, status) VALUES ('$id_user', '$check', 0 )";
            $result = mysqli_query($conn, $sql);
            $_SESSION['bool'] = 1;
        }
    } else{
        $_SESSION['bool'] = 0;
    }

    header("Location:../PHP/servicii.php");

    mysqli_close($conn);
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
    <title>serviciiCheck</title>
</head>

<body>
    <?php
    require 'menu.php';
    ?>

    <main>
        <h2 class="title">serviciiCheck</h2>
        <p>In aceasta sectiune se pot regasii serviciile comandate.</p>
        <?php
        serviciiIn();
        ?>


    </main>

    <script src="js/main.js"></script>
</body>

</html>