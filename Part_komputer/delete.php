<?php
include "connect.php";
$id = $_GET['id'];
$queryDelete = "DELETE FROM spare_part where id='$id' ";
mysqli_query($mycon, $queryDelete);

// mengalihkan halaman kembali ke index.php
header("location:read.php");