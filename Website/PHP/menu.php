<?php

session_start();

if (isset($_SESSION["username"])) {

    echo '<header>
    <a href="/ProiectDAW/index.php">
        <!-- <i class="fa-solid fa-house logo"></i> -->
        <i class="fa-solid fa-laptop-code logo"></i>
        <b>Adrian Neagu</b>
    </a>
    <form class="login-container" action="/ProiectDAW/PHP/logout.php">
        <div class="dropdown">
            <b>'.$_SESSION["username"].'</b> <i class="fa-solid fa-caret-down"></i>';
            if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){
                echo'
                <div class="dropdown-content">
                    <a href="/ProiectDAW/PHP/administreaza.php">Administreaza</a>
                    <a href="/ProiectDAW/PHP/servicii_comandate.php">Servicii comandate</a>
                    <a href="#">Cont</a>
                </div>';
            }
            else {
                echo'
                <div class="dropdown-content">
                    <a href="/ProiectDAW/PHP/servicii_comandate.php">Servicii comandate</a>
                    <a href="#">Cont</a>
                </div>';
            }
           echo' 
        </div>
        <button type="sumbit" id="logout">Logout</button>
    </form>
    </header>
    <div class="page-container">

    <aside id="side-menu">
        <a href="/ProiectDAW/index.php"><i class="fa-solid fa-house logoHome"></i>Home</a>
        <a href="/ProiectDAW/PHP/proiecte.php"><i class="fa-solid fa-file-pen logoHome"></i></i>Proiecte</a>
        <a href="/ProiectDAW/PHP/servicii.php"><i class="fa-solid fa-user-tie"></i> Servicii</a>
        <a href="/ProiectDAW/PHP/contact.php"><i class="fa-solid fa-address-card logoHome"></i>Contact</a>
    </aside>';
    
}
else {
    echo '<header>
    <a href="/ProiectDAW/index.php">
        <!-- <i class="fa-solid fa-house logo"></i> -->
        <i class="fa-solid fa-laptop-code logo"></i>
        <b>Adrian Neagu</b>
    </a>
    <div class="login-container">
        <form action="/ProiectDAW/PHP/login.php" method="POST">
            <input required type="text" placeholder="Username" name="username">
            <input required type="password" placeholder="Password" name="psw">
            <button type="submit">Login</button>
        </form>
        <form action="/ProiectDaw/PHP/index_register.php">
            <button type="sumbit">Register</button>
        </form>
    </div>
    </header>
    <div class="page-container">
    
    <aside id="side-menu">
        <a href="/ProiectDAW/index.php"><i class="fa-solid fa-house logoHome"></i>Home</a>
        <a href="/ProiectDAW/PHP/proiecte.php"><i class="fa-solid fa-file-pen logoHome"></i></i>Proiecte</a>
        <a href="/ProiectDAW/PHP/servicii.php"><i class="fa-solid fa-user-tie"></i> Servicii</a>
        <a href="/ProiectDAW/PHP/contact.php"><i class="fa-solid fa-address-card logoHome"></i>Contact</a>
    </aside>';

}
