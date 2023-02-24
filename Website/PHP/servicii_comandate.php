<?php
    function serviciiOut()
    {
        require 'conectDB.php';
        $id_user = $_SESSION['id'];
    
        $sql = "SELECT c.id_comanda, s.nume, c.status from comenzi c, servicii s where c.id_serviciu=s.id and c.id_user='$id_user'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
    
            echo '
                <tr>
                    <td>' .$row['id_comanda']. '</td>
                    <td>' .$row['nume']. '</td>';
                    if($row['status']==1){
                        echo'<td style="color:green;">Confirmat</td>';
                    }
                    else{
                        echo'<td>In asteptare</td>';
                    }
                    echo'
                    <td><button onclick="return confirm(\'Esti sigur ca vrei sa stergi comanda?\');" class="fa-solid fa-trash" formaction="anulareComanda.php" formmethod="POST" value="'.$row['id_comanda'].'" name="anulareId"></button></td>
                    
                   
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
    <title>Contact</title>
</head>

<body>
    <?php
    require 'menu.php';
    ?>

    <main>
        <h2 class="title">Servicii comandate</h2>
        <p>Serviciile comandate:</p>
        <?php
        echo '
        <div class="tabelServicii2">
            <form>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nume</th>
                        <th>Status</th>
                        <th>Optiuni</th>
                    </tr>';
                    serviciiOut();
        echo '</table>
            </form>
        </div>';
        ?>        
        <!-- <button class="fa-solid fa-trash" formaction="anulareComanda.php" formmethod="POST" value="$row['id_comanda']"></button> -->
    </main>

    <script src="js/main.js"></script>
</body>

</html>