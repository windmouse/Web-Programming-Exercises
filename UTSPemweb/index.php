<?php
    echo('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">');
    if(isset($_COOKIE['player'])){
        echo("<div class='container container-fluid'>
            <h1>Hallo {$_COOKIE['player']} , selamat datang kembali di permainan ini!!!</h1>
            <a href='game.php' class='btn btn-primary'>Start Game</a>
            <p>Bukan Anda ? <a href='form.html' class='btn btn-danger>Klik Disini</a></p>
        </div>");
    }else{
        header("Location: form.html");
    }

?>