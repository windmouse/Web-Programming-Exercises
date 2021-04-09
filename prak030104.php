<?php
function hitungGaji($gol, $masaKerja){ if ($gol == "A"){
if ($masaKerja < 10){
$gaji = 5000000;
echo "Golongan : ". $gol ." besarnya gaji : ". $gaji;
}else {
$gaji = 7000000;
echo "Golongan : ". $gol ." besarnya gaji : ". $gaji;
}
}elseif ($gol == "B"){
if ($masaKerja < 10){
$gaji = 6000000;
echo "Golongan : ". $gol ." besarnya gaji : ". $gaji;
}else {
$gaji = 8000000;
echo "Golongan : ". $gol ." besarnya gaji : ". $gaji;
}
}
return $gaji;
}
hitungGaji("A", 1);
?>