<?php


include "db.php";


$tanya =$_GET['tanya'];
$nama =$_GET['penanya'];


$insert="INSERT INTO pertanyaan (pertanyaan, penanya)
VALUES ('$tanya', '$nama')";




if ($db->query($insert) === TRUE) {
	echo "new record created successfully";
} else {
	echo "Error: " . $insert . "<br>" . $db->error;
}
$db->close();

header("location: Tanyadokter.php");
exit;




?>