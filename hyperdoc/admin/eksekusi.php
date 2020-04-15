<?php

require_once( "db.php");

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];

// ambil data file
$namaFile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];


// tentukan lokasi file akan dipindahkan
$dirUpload = "images/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);



$insert = "INSERT INTO barang( nama, harga, jenis, jumlah, foto) VALUES('$nama', '$harga', '$jenis', '$jumlah', '$namaFile')";
if ($db->query($insert) === TRUE) {
	echo "new record created successfully";
} else {
	echo "Error: " . $insert . "<br>" . $db->error;
}


header("location: index.php");
exit;


?>