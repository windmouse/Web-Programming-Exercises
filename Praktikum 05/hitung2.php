<?php 
//baca kedua bilangan
$bil1=$_POST['bil1'];
$bil2=$_POST['bil2'];

//proses perhitungan
if(isset($_POST['penjumlahan'])){
	$hasil = $bil1+$bil2;
	$op="+";
}elseif (isset($_POST['pengurangan'])){
	$hasil = $bil1-$bil2;
	$op="-";
}elseif (isset($_POST['perkalian'])){
	$hasil = $bil1*$bil2;
	$op="x";
}elseif (isset($_POST['pembagiann'])){
	$hasil = $bil1/$bil2;
	$op="/";
}elseif (isset($_POST['pangkat'])){
	$hasil = pow($bil1,$bil2);
	$op="^";
}


//menampilkan hasil perhitungan
echo "<h2>".$bil1. " ".$op. " ".$bil2. " = ".$hasil."</h2>";
 ?>