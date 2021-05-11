<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'game';


    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    if(!$conn){
        die("Connection Error : ".mysqli_connect_error($conn));
    }

?>