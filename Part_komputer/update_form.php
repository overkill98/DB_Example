<html>

<head>
	<title>Create</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>

<body class="container">

	<h2>UPDATE DATA PART KOMPUTER</h2>
	<br />
	<a class="btn btn-sm btn-info" href="read.php">KEMBALI</a>
	<br />
	<br />
	<h3>monggo edit data DATA PART KOMPUTER</h3>


	<?php
	// include 'conn.php';
	// $data = mysqli_query($mycon,"select * from spare_part");
	$id = $_GET['id'];
	$nama_produk = $_GET['nama_produk'];
	$vendor = $_GET['vendor'];
	$stok = $_GET['stok'];
	$harga = $_GET['harga'];
	?>

	<form method="post" action="update.php">
		<input type="hidden" value="<?php echo $id ?>">
		<table>
			<tr>
				<td>ID</td>
				<td><input class="form-control" type="text" name="id" value="<?php echo $id ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input class="form-control" type="text" name="nama_produk" value="<?php echo $nama_produk ?>"></td>
			</tr>
			<tr>
				<td>Vendor</td>
				<td><input class="form-control" type="text" name="vendor" value="<?php echo $vendor ?>"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input class="form-control" type="text" name="stok" value="<?php echo $stok ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input class="form-control" type="text" name="harga" value="<?php echo $harga ?>"></td>
			</tr>
			<tr style="display:none;">
				<td>id yang disembunyikan</td>
				<td><input type="text" name="id" value="<?php echo $id ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-success" type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>

</html>