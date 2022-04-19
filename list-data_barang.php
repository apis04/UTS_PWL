<?php include("conn.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>TOKO ABC</title>
	</head>
	<body>
		<header>
			<h3>Daftar Barang</h3>
		</header>
		<nav>
			<a href="form-data_barang.php">[+] Tambah Baru</a>
		</nav>
		<br>
		<table border="1">
			<thead>
				<tr>
					<th>Kode Barang</th>
					<th>Nama</th>
					<th>Harga</th>
					<th>Gambar</th>
                    <th>Jumlah Stok</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM barang";
					$query = mysqli_query($db, $sql);
					while($barang = mysqli_fetch_array($query)){
						echo "<tr>";
						echo "<td>".$barang['Kode Barang'],"</td>";
						echo "<td>".$barang['Nama'],"</td>";
						echo "<td>".$barang['Harga'],"</td>";
						echo "<td>".$barang['Gambar'],"</td>";
						echo "<td>".$barang['Jumlah Stok'],"</td>";
						echo "<td>";
						echo "<a href='form-edit_barang.php?id=".$barang['Kode Barang']."'>Edit</a> | ";
						echo "<a href='hapus_barang.php?id=".$barang['Kode Barang']."'>Hapus</a> | ";
						echo "</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>