<?php
	session_start();
	include('ceksession.php');

	echo "<h1>Page 1 Session</h1>";
	echo "<p>Selamat datang ".$_SESSION['namauser']."</p>";

	echo "<h2>Menu Utama</h2>";
	echo "<p><a href='page1session.php'>Page 1</a> | <a href='page2session.php'>Page 2</a> | <a href='page3session.php'>Page 3</a> | <a href='logoutsession.php'>Logout</a></p>";
?>
