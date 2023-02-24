<?php

function adminTable()
{

    require 'conectDB.php';

    $sql = "SELECT c.id_comanda, s.nume, c.status, u.username from comenzi c, servicii s, users u where c.id_serviciu=s.id and c.id_user=u.id order by id_comanda";
    $result = mysqli_query($conn, $sql);

    echo "<table border='1'>
        <tr>
        <th>Id comanda</th>
        <th>User</th>
        <th>Serviciu</th>
        <th>Status</th>
        <th>Aproba</th>
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_comanda'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['nume'] . "</td>";
        if($row['status']==1){
            echo'<td style="color:green;">Confirmat</td>';
        }
        else{
            echo'<td>In asteptare</td>';
        }
        echo "<form>";
        echo '<td><button onclick="return confirm(\'Esti sigur ca vrei sa aprobi comanda?\');
        " class="fa-regular fa-square-check" formaction="confirmComanda.php" formmethod="POST" value="'.$row['id_comanda'].'" name="confirmComanda">
        </button></td>';
        echo "</form>";
        echo "</tr>";
    }
    echo "</table>";

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
    <title>Administreaza</title>
</head>

<body>
    <?php
    require 'menu.php';
    ?>

    <main>
        <h2 class="title">Administreaza</h2>
        <p>Comenzi din baza de date:</p>

        <?php
        echo '<div class="tabelServicii3">';
        adminTable();
        echo '</div>';
        ?>
    </main>

    <script src="js/main.js"></script>
</body>

</html>