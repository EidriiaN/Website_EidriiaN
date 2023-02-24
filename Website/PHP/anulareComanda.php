<?php

    require 'conectDB.php';
    $id_anulareComanda = $_POST['anulareId'];

    $sql = "DELETE from comenzi where id_comanda = '$id_anulareComanda'";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    
    header('Location:/ProiectDAW/PHP/servicii_comandate.php');
        
?>