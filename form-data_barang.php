<!DOCTYPE html>
<html>
	<head>
		<title>TOKO ABC</title>
	</head>
	<body>
    <h1>FORMULIR TAMBAH DATA BARANG</h1>
		<form action="proses-data_barang.php" method="POST">
			<fieldset>
				<p>
					<label for="Kode">Kode_Barang: </label>
					<input type="text" name="Kode" placeholder="Kode Barang " />
				</p>
				<p>
					<label for="Nama">Nama: </label>
					<textarea name="Nama"></textarea>
				</p>
				<p>
					<label for="Harga">Harga: </label>
					<textarea name="Harga"></textarea>
                </p>
                <p>
					<label for="gambar">Gambar: </label>
					<textarea name="Gambar"></textarea>
                </p>
                <p>
					<label for="jml_stok">jumlah stok: </label>
					<textarea name="Nama"></textarea>
                 </p>
                 <p>
					<input type="submit" name="tambah" value="Tambah" />
				</p>
			</fieldset>
		</form>
	</body>
</html>