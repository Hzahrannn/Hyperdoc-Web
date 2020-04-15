<?php
require_once( "db.php");
$id= $_POST['id'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$tambah = $_POST['tambah'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];

$insert = "INSERT INTO masuk( nama, tambah,tanggal) VALUES('$nama','$tambah','$tanggal')";

if ($db->query($insert) === TRUE) {
echo "new record created successfully";
} else {

}
$update = "UPDATE barang SET jumlah=$jumlah+$tambah WHERE id='$id'";

if ($db->query($update) === TRUE) {
    echo "Update successfully";
} else {
}


?>