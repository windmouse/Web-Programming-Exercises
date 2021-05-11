<?php
    include("./dbconfig.php");
    echo('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">');
    function insertData($Pemain, $Skor){
        $result = mysqli_query($GLOBALS['conn'], "INSERT INTO ranking(Pemain, Skor) 
        VALUES('$Pemain', '$Skor')");

        if(!$result){
            die("Insert Data Failed : ".mysqli_error($GLOBALS['conn']));
        }
    }


    function fetchRanking(){
        $result = mysqli_query($GLOBALS['conn'], "SELECT * FROM ranking ORDER BY Skor DESC LIMIT 10");
        echo("<center>
            <h1>Rangking Pemain</h1>
        </center>");
        echo("<div class='container'><table class='table table-dark table-borderless'>");
        while($data = mysqli_fetch_assoc($result)){
            echo("<tr>
                <td>{$data['Pemain']}</td>
                <td>{$data['Skor']}</td>
            </tr>");
        }
        echo("</table></div>");
    }
?>