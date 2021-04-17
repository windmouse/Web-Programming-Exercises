<!DOCTYPE html>
<html>
<head>
	<title>Ltihan</title>
</head>
<body>
	<?php 
	echo "<center>";
	echo "<h1>DATA MAHASISWA</h1>";
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>No</td><td>NIM</td><td>Nama Lengkap</td><td>Tgl Lahir</td><td>Tempat lahir</td><td>Umur</td>";
	echo "<tr>";

	$namaFile="datamhs.dat";
	$myfile =fopen($namaFile, "rb") or die("Tidak bisa buka file!");

 	function hitungUmur($tgl1, $tgl2){
 		$pecah1= explode("-", $tgl1);
 		$date1=$pecah1[2];
 		$month1=$pecah1[1];
 		$year1=$pecah1[0];

		$pecah2= explode("-", $tgl2);
 		$date2=$pecah2[2];
 		$month2=$pecah2[1];
 		$year2=$pecah2[0];

 		$sjd1=GregorianToJD($month1, $date1, $year1);
 		$sjd2=GregorianToJD($month2, $date2, $year2);

 		$selisih=$sjd2-$sjd1;
 		$usia=ceil($selisih/365);

 		return $usia;
 	}

 	
	$no = 0;
	while (!feof($myfile)) {
		$open =fgets($myfile);
		$part =explode("|", $open);
		$no++;
		echo "<tr>";
			echo "<td>" .$no. "</td>";
			echo "<td>" .$part[0]. "</td>";
			echo "<td>" .$part[1]. "</td>";
			echo "<td>" .$part[2]. "</td>";
			echo "<td>" .$part[3]. "</td>";
			echo "<td>" .HitungUmur($part[2], date('Y-m-d')). "</td>";
		echo "</tr>";
		
	}

	echo "</table>";
	echo "Jumlah Mahasiswa: ".$no;
	echo "</center>";
	fclose($myfile);
  ?>

	
</body>
</html>