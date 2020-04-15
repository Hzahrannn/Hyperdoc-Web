<?php


include "db.php";


$jawab =$_GET['jawaban'];
$id_pertanyaan = $_GET["id_pertanyaan"];
$penjawab =$_GET['penjawab'];


$insert="INSERT INTO jawab ( id_pertanyaan, jawaban, penjawab)
VALUES ( '$id_pertanyaan', '$jawab', '$penjawab')";




if ($db->query($insert) === TRUE) {
	echo "new record created successfully";
} else {
	echo "Error: " . $insert . "<br>" . $db->error;
}
$db->close();

header("location: admin/index.php");
exit;




?>