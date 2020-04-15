<?php
	session_start();
	require_once( "db.php");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql= "SELECT * FROM admin WHERE username = '$username'";
	$query = $db->query($sql);
	$hasil = $query->fetch_assoc();
	if($query->num_rows == 0) {
		echo "<div align = 'center' >Username Belum Terdaftar!<a href='pages-signin-signup.php'>Back</a>";
	} else {
		if ($password <> $hasil['password']){
			echo "<div align = 'center' >Password Salah<a href='pages-signin-signup.php'>Back</a>";
		}
		else {
		$_SESSION ['username'] = $hasil['username'];
		
		header('location: pages-login.php');
		}
	}
	?>