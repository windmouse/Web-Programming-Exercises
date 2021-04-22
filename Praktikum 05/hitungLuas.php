<?php 
	$nama =$_GET['n'];
	$diameter =$_GET['d'];
	$tinggi =$_GET['t'];

	$r =$diameter/2;
	$phi =3.14;
	$luas = 2*$phi*$r*($r+$tinggi);
	echo "Luas tabung $nama dengan diameter $diameter dan tinggi $tinggi adalah $luas satuan luas ";
?>