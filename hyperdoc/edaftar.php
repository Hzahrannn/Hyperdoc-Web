<?php


include "db.php";


$nama =$_POST['nama_user'];
$email =$_POST['email_user'];
$password =$_POST['password'];

$insert="INSERT INTO user (nama_user, email_user, password)
VALUES ('$nama', '$email', '$password')";




if ($db->query($insert) === TRUE) {
	echo "new record created successfully";
} else {
	echo "Error: " . $insert . "<br>" . $db->error;
}
$db->close();

header("location: index.php");
exit;




?>