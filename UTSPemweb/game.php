<?php
    session_start();
    include('./func.php');
    include('./dbconfig.php');
    echo('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">');
    if(isset($_COOKIE['player'])){
        if($_SESSION['lives'] != 0){
            $total = $_SESSION['num1'] + $_SESSION['num2'];
            echo ("<h1>Hello {$_COOKIE['player']}, tetap semangat ya… you can do the best!!<br/>
                Lives: {$_SESSION['lives']} | Score: {$_SESSION['score']}</h1>");
            echo("<form action='game.php' method='get' class='form-control'>
                <table class='table table-borderless table-dark'>
                    <tr>
                        <td>Berapakah {$_SESSION['num1']} + {$_SESSION['num2']} = </td>
                        <td><input type='text' name='answer' class='form-control'></td>
                        <br/>
                    </tr>
                    <tr>
                        <td><button type='submit' name='jawab' class='btn btn-primary'>Jawab</button></td>
                        <td></td>
                    </tr>
                </table>
             </form>");
            if(isset($_GET['jawab'])){
                if($_GET['answer'] == $total){
                    $_SESSION['score'] += 10;
                    echo ("<strong>
                            Hello {$_COOKIE['player']}, Selamat jawaban Anda benar…
                            <br/>Lives: {$_SESSION['lives']} | Score: {$_SESSION['score']}
                            </strong>");
                }else{
                    $_SESSION['score'] -= 2;
                    $_SESSION['lives'] -= 1;
                    echo ("<div class='container'>
                        <strong>
                                Hello {$_COOKIE['player']}, sayang jawaban Anda salah… tetap semangat ya !!!
                                <br/>Lives: {$_SESSION['lives']} | Score: {$_SESSION['score']}
                                </strong>
                    </div>");
                }
                $_SESSION['num1']  = random_int(0, 20);
                $_SESSION['num2']  = random_int(0, 20);
                echo('<a href="game.php" class="btn btn-warning">Soal Selanjutnya</a>');
            }
        }else{
            insertData($_COOKIE['player'], $_SESSION['score']);
            echo("<div class='container'>
                <h1>
                Hello, {$_COOKIE['player']} Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.
                <br/>Score Anda : {$_SESSION['score']}</h1>
                <a href='game.php' class='btn btn-warning'>Main Lagi</a>
                <a href='ranking.php' target='_blank' rel='noopener noreferrer' class='btn btn-secondary'>Rangking Pemain</a>
            </div>");
            $_SESSION['lives'] = 5;
            $_SESSION['score'] = 0;
            $_SESSION['num1']  = random_int(0, 20);
            $_SESSION['num2']  = random_int(0, 20);
        }
    }else{
        header('Location: form.html');
    }


?>