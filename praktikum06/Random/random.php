<?php
    session_start();

    echo "<p>Hallo, nama Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat antara 0-100. Silakan Anda tebak!!!</p>" ;
    $acak = $_SESSION['random'];
    $tebakangka = $_POST['tebakangka'];
    if (isset($_POST['submit'])){
        if ($tebakangka < $acak){
            echo "Yaaaah.... masih salah yaa, Tebakan Anda terlalu kecil";
            ?>
            <form method="post" action="random.php" >
                <input type="text" name="tebakangka">
                <input type="submit" name="submit" value="Submit">
            </form>
        <?php
        } else if ($tebakangka > $acak){
            echo "Yaaaah....salah yaa, Tebakan Anda terlalu besar";
        ?>
            <form method="post" action="random.php">
                <input type="text" name="tebakangka">
                <input type="submit" name="submit" value="Submit">
            </form>
        <?php
        } else {
            echo "Selamat Anda Benar, memilih bilangan ".$acak;
            echo "<p><a href='login.php'>Ulangi Lagi</a></p>";
        }

    }
?>