<?php
    function extrageDB_logat(){

        require 'conectDB.php';

        $sql= "SELECT * FROM servicii";
        $result = mysqli_query($conn,$sql);
        
        while ($row = mysqli_fetch_assoc($result)) {

            $_SESSION['id_serviciu'] = $row['id'];
            echo '
            <tr>
                <td>'.$row['nume'].'</td>
                <td>'.$row['descriere'].'</td>
                <td>'.$row['timp_estimativ'].'</td>
                <td>'.$row['pret'].'€</td>
                <td><input type="checkbox" name="check_list[]" value="'.$_SESSION["id_serviciu"].' "><i class="fa-solid fa-check fa-xl"></i></td>
            </tr>';
        }

    mysqli_close($conn);
    }

    function extrageDB_unlogat(){

        require 'conectDB.php';

        $sql= "SELECT * FROM servicii";
        $result = mysqli_query($conn,$sql);
        
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['id_serviciu'] = $row['id'];
            echo '
            <tr>
                <td>'.$row['nume'].'</td>
                <td>'.$row['descriere'].'</td>
                <td>'.$row['timp_estimativ'].'</td>
                <td>'.$row['pret'].'€</td>
            </tr>';
        }

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
    <title>Servicii</title>
</head>

<body>
    <?php
    require 'menu.php';
    ?>

    <main>
        <h2 class="title">Servicii</h2>

        <p>In aceasta sectiune se pot regasi serviciile pe care le prestez.</p>

        <?php
        if (isset($_SESSION['logat1']) && $_SESSION['logat1'] === true) {
            echo '
            <div class="tabelServicii">
                <form action="serviciiCheck.php" method="post">
                    <table>
                        <tr>
                            <th>Nume</th>
                            <th>Descriere</th>
                            <th>Timp estimativ</th>
                            <th>Pret</th>
                            <th>Selecteaza</th> 
                        </tr>';
                        extrageDB_logat();
            echo '</table>
                    <button onclick="return confirm(\'Esti sigur ca vrei sa comanzi urmatoarele servicii?\');" type="submit" name="trimite">Trimite</button>
                    
                </form>';
                if(isset($_SESSION['bool'])){
                    if($_SESSION['bool']==1)
                        echo '<p style="color:green" >Ai comandat cu succes serviciile, le poti vedea la sectiunea "Servicii comandate".';
                    else
                        echo '<p style="color:red">Ceva nu a mers bine, mai incearca.';
                    unset($_SESSION['bool']);
                }
                
            '</div>';

        }
        else {
            echo '
            <div class="tabelServicii">
                <form action="">
                    <table>
                        <tr>
                            <th>Nume</th>
                            <th>Descriere</th>
                            <th>Timp estimativ</th>
                            <th>Pret</th>
                        </tr>';
                        extrageDB_unlogat();
                        echo'
                        </table>                    
                </form>
                
            </div>';
            
        }
        ?>

    </main>
    <?php

    require 'footer.php';
    ?>

    <script src="js/main.js"></script>
</body>

</html>