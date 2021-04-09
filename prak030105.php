<?php
function hitungDenda($tglHarusKembali,
$tglKembali){
$denda = 3000;

$pisah1 = explode("-",
$tglHarusKembali);
$date1 = $pisah1[2];
$month1 = $pisah1[1];
$year1 = $pisah1[0];

$pisah2 = explode("-", $tglKembali);
$date2 = $pisah2[2];
$month2 = $pisah2[1];
$year2 = $pisah2[0];

$tgl1 = GregorianToJD($month1, $date1, $year1);
$tgl2 = GregorianToJD($month2, $date2, $year2);	

$selisih = $tgl2 - $tgl1;

$bayarDenda = $selisih * $denda; 
echo "Besarnya denda yaitu: Rp".$bayarDenda;
echo "<br>";
echo "Dengan keterlambatan pengembalian ".$selisih." hari";
}
hitungDenda("2021-01-03", "2021-01-05");
?>