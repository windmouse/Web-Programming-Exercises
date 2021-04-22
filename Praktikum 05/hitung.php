<?php 
//baca kedua bilangan 
$bil1 =$_POST['bil1'];
$bil2 =$_POST['bil2'];

//baca opertator
$op=$_POST["operasi"];

//perhitungan
if ($op=="+"){
	$hasil = $bil1 + $bil2;
}elseif ($op=="-") {
	$hasil = $bil1 - $bil2;
}elseif ($op=="x") {
	$hasil = $bil1 * $bil2;
}elseif ($op=="/") {
	$hasil = $bil1 / $bil2;
}elseif ($op=="^") {
	$hasil = pow($bil1,$bil2);
}

//menampilkan hasil perhitunan
echo "<h2>".$bil1. " ".$op. " ".$bil2. " = ".$hasil."</h2>";
 ?>