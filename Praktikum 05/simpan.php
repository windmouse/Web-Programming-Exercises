<?php 
if (isset($_POST['submit'])) {
	//baca
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$tgllhr=$_POST['tgllhr'];
	$tmptlhr=$_POST['tmptlhr'];

	$namaFile="datamhs.dat";
	$myfile =fopen($namaFile, "a") or die("Tidak bisa membuka file");
	$in =$nim."|".$nama."|".$tgllhr."|".$tmptlhr;
	$in ="\r\n".$in;
	fwrite($myfile, $in); 

	fclose($myfile);
	echo "Data Berhasil diinput";
	

}else{
	echo "Data Tidak Ditemukan";
}
 ?>  