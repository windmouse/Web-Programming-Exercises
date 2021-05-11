<?php
    session_start();

    if(isset($_POST['login'])){
        setcookie("player", $_POST['nama'], time() + 24*3600*30);
        $_SESSION['lives'] = 5;
        $_SESSION['score'] = 0;
        $_SESSION['num1']  = random_int(0, 20);
        $_SESSION['num2']  = random_int(0, 20);
        header('Location: game.php');
    }


?>