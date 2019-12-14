<html>

<head>
	<title>Create</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>

<body class="container">

	<h2>CREATE DATA PART KOMPUTER</h2>
	<br />
	<a href="read.php">KEMBALI</a>
	<br />
	<br />
	<h3>TAMBAH DATA PART KOMPUTER</h3>
	<form method="post" action="create.php">
		<table>
			<tr>
				<td>ID</td>
				<td><input class="form-control" type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td><input class="form-control" type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>Vendor</td>
				<td><input class="form-control" type="text" name="vendor"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input class="form-control" type="text" name="stok"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input class="form-control" type="text" name=harga></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="btn btn-success" type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>

</html>