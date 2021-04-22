<!DOCTYPE html>
<html>
<head>
	<title>View Tabung</title>
</head>
<body>
	<h1 align="center">TABEL TABUNG</h1>
	<table border="1" cellpadding="3" align="center">
		<tr>
			<td>Nama</td>
			<td>Diameter</td>
			<td>Tinggi</td>
			<td>Luas</td>
		</tr>

		<?php 
			$namaFile="datatabung.dat";
			$myfile =fopen($namaFile, "r") or die("Tidak bisa buka file!");
			
			while (!feof($myfile)) {
				$buka =fgets($myfile);
				$batas =explode(",", $buka);

				echo "<tr>";
					echo "<td>" .$batas[0]. "</td>";
					echo "<td>" .$batas[1]. "</td>";
					echo "<td>" .$batas[2]. "</td>";
					echo "<td><a href='hitungLuas.php?n=$batas[0]&d=$batas[1]&t=$batas[2]'>view</a></td>";
				echo "</tr>";
			}
			fclose($myfile);
		?>


	</table>
</body>
</html>