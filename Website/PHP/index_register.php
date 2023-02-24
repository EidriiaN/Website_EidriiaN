<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- <script src="https://kit.fontawesome.com/33c1bca693.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" type="text/css" href="/ProiectDAW/css/fontawsome/css/all.css">
    <link rel="stylesheet" type="text/css" href="/ProiectDAW/css/fontawsome/fontawesome.css">
    <title>Inregistrare</title>
</head>
<body>
    <?php
        require 'menu.php';
    ?> 
        <main>
            
            <div class="formular">
                
                <h2>Inregistrare</h2>
                <br>
                <form action="register.php" method="post">
                        <label for="username">Username</label>
                        <input required type="text" name="username" placeholder="Username">
                        <br>
                        <label for="password">Password</label>
                        <input required type="password" name="password" placeholder="Password">
                        <br>
                        <label for="nume">Nume</label>
                        <input required type="text" name="nume" placeholder="Nume">
                        <br>
                        <label for="prenume">Prenume</label>
                        <input required type="text" name="prenume" placeholder="Prenume">
                        <br>
                        <label for="email">Email</label>
                        <input required type="email" name="email" placeholder="Email">
                        <br>
                        <button type="submit" name="trimite">Trimite</button>
                </form>
                <?php
                    if(isset($_GET['info']) && $_GET['info']=='gresitNume'){
                        echo'<p style="text-align: center; color:red">Username is taken</p>';
                    }
                    else if(isset($_GET['info']) && $_GET['info']=='gresitEmail'){

                        echo'<p style="text-align: center; color:red">Email is taken</p>';
                    }
                    else if (isset($_GET['info']) && $_GET['info']=='ok'){

                        echo'<p style="text-align: center;color:green">Cont creat cu succes</p>';
                    }
                ?>
            </div>
        </main>
    </div>

    <script src="../js/main.js"></script>
</body>
</html>