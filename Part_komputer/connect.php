<?php
// silahkan ganti nama database sesuai db klean
$database = "part_computer";
$mycon = mysqli_connect("localhost", "root", "", $database);

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
else{
	echo "You're Connected with 'part_computer' Database, chill up";
}
