<?php
// koneksi database
include 'connect.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$vendor = $_POST['vendor'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

// membuat query database update
$queryUpdate = "UPDATE spare_part SET ";
$queryUpdate .= "id='" . $id . "', nama_produk='" . $nama_produk . "', vendor='" . $vendor . "',stok='" . $stok . "', harga='" . $harga . "' ";
$queryUpdate .= "WHERE id = " . $id;

// mengupdate data ke database
mysqli_query($mycon, $queryUpdate);

// mengalihkan halaman kembali ke index.php
header("location:read.php");
