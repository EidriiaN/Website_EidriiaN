<?php

    require 'conectDB.php';
    $id_comanda = $_POST['confirmComanda'];

    $sql = "UPDATE comenzi set status = 1 where id_comanda = '$id_comanda'";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    
    header('Location:/ProiectDAW/PHP/administreaza.php');
        
?>