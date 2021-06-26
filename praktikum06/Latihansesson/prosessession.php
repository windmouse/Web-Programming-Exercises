<?php
session_start();
$users = array(
			array("username1", "Jerry", "123456"),
			array("username2", "Ignatius", "654321"),
			array("username3", "Padoma", "112233")
		 );

if (isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	foreach ($users as $profile_user) {
		if (($profile_user[0] == $username) && ($profile_user[2] == $password)){
			$_SESSION['namauser'] = $profile_user[1];
			header("Location: page1session.php");
		}
	}
	echo "<h3>Login gagal</h3>";
	echo "<p>Silakan <a href='formsession.html'>login kembali</a></p>";
}
?>
