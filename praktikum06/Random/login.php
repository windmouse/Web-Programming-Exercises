<?php 
	session_start();
	$_SESSION['random'] =rand(0,100);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tebak Angka</title>
</head>
<body>
	<h1>Tebak Angka</h1>
	<?php
	    echo "<p>Hallo, nama Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat antara 0-100. Silakan Anda tebak!!!</p>" ;
	?>
	<form method="post" action="random.php">
		<input type="text" name="tebakangka">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>