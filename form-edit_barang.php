<?php
	include ("conn.php");
	if( !isset($_GET['id']) ){
		header('Location: list-data_barang.php');
	}
	$id = $_GET['id'];
	$sql = "SELECT * FROM barang WHERE id=$id";
	$query = mysqli_query($db, $sql);
	$barang = mysqli_fetch_assoc($query);
	if( mysqli_num_rows($query) < 1){
		die("data tidak diemukan...");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>TOKO ABC</title>
	<head>
	<body>
		<header>
			<h3>Edit Data Barang</h3>
		</header>
		<form action="proses-edit_barang.php" method="POST">
			<fieldset>
				<p>
					<label for="kode_barang">kode_barang: </label>
					<input type="text" name="kode_barang" placeholder="kode_barang" value="<?php echo $barang['kode_barang'] ?>" />
				</P>
				<p>
					<label for="nama">nama: </label>
					<textarea name="nama"><?php echo $barang['nama'] ?></textarea>
				</p>
                <p>
					<label for="harga">harga: </label>
					<textarea name="harga"><?php echo $barang['harga'] ?></textarea>
				</p>
                <p>
					<label for="gambar">gambar: </label>
					<textarea name="gambar"><?php echo $barang['gambar'] ?></textarea>
				</p>
                <p>
					<label for="jml_stok">jml_stok: </label>
					<textarea name="jml_stok"><?php echo $barang['jml_stok'] ?></textarea>
				</p>
				<p>
					<input type="submit" value="Edit" name="edit" />
				</p>
			</fieldset>
		</form>
	</body>
</html>