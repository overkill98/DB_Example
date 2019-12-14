<?php
// koneksi database
include 'connect.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$vendor = $_POST['vendor'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
// pembuatan query insert 
$queryInsert = "INSERT INTO spare_part (`id`, `nama_produk`, `vendor`, `stok`, `harga`)";
$queryInsert .= "VALUES ('$id', '$nama_produk', '$vendor', '$stok', '$harga');";
// menginput data ke database
mysqli_query($mycon, $queryInsert);

// mengalihkan halaman kembali ke index.php
header("location:read.php");
