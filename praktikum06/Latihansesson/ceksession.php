<?php
	if (!isset($_SESSION['namauser'])){
		echo "<p>Hayoo.. mau coba nge by-pass ya?</p>";
		echo "<p><a href='formsession.html'>Login</a> dulu ya..</p>";
		exit();
	} 
?>
