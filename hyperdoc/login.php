<?php
	include "db.php";
	session_start();
	$email_user = $_POST['email_user'];
	$password = $_POST['password'];
	$sql= "SELECT * FROM user WHERE email_user = '$email_user'";
	$query = $db->query($sql);
	$hasil = $query->fetch_assoc();
	if($query->num_rows == 0) {
		echo "<div align = 'center' >email_user Belum Terdaftar!<a href='index.php'>Back</a>";
	} else {
		if ($password <> $hasil['password']){
			echo "<div align = 'center' >Password Salah<a href='index.php'>Back</a>";
		}
		else {
		$_SESSION ['email_user'] = $hasil['email_user'];
		
		header('location: index.php');
		}
	}
	?>