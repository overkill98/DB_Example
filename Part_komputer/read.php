<html>

<head>
	<title>CRUD PHP with mysqli driver</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>

<body class="container">

	<h2>READ DATA PART KOMPUTER</h2>
	<br />
	<a href="create_form.php">+ ADD DATA SPARE PART</a>
	<br />
	<br />
	<table class="table table-stripped">
		<tr>
			<th>ID</th>
			<th>Nama Produk</th>
			<th>Vendor</th>
			<th>Stok</th>
			<th>Harga</th>
		</tr>
		<?php
		include 'connect.php';
		$data = mysqli_query($mycon, "select * from spare_part");
		while ($d = mysqli_fetch_array($data)) {
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama_produk']; ?></td>
				<td><?php echo $d['vendor']; ?></td>
				<td><?php echo $d['stok']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td>
					<a class="btn btn-sm btn-info" href="update_form.php?id=<?php echo $d['id'] . '&&nama_produk=' . $d['nama_produk'] . '&&vendor=' . $d['vendor'] . '&&stok=' . $d['stok'] . '&&harga=' . $d['harga']; ?>">EDIT</a>
					<a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>