<?php
	include("conn.php");
	if(isset($_POST['tambah'])){
		$kode_barang = $_POST['Kode_barang'];
		$nama = $_POST['Nama'];
		$harga = $_POST['Harga'];
		$gambar = $_POST['Gambar'];
		$jml_stok = $_POST['Jumlah Stok'];
		$sql = "INSERT INTO toko_abc (kode_barang, nama, harga, gambar, jml_stok) VALUE ('$kode_barang', '$nama', '$harga', '$gambar', '$jml_stok')";
		$query = mysqli_query($db, $sql);
		if( $query ) {
			header('Location: list-data_barang.php?status=sukses');
		} else {
			header('Location: list-data_barang.php?status=gagal');
		}
	} else {
		die("Akses dilarang...");
	}
?>
<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Penambahan data baru berhasil!";
			} else {
				echo "Penambahan data gagal";
			}
		?>
	</p>
<?php endif; ?>