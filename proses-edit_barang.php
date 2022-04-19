<?php
	include("conn.php");
	if(isset($_POST['edit'])){
		$kode_barang = $_POST['kode_barang'];
		$nama = $_POST['Nama'];
		$harga = $_POST['harga'];
		$gambar = $_POST['Gambar'];
		$jml_stok = $_POST['jml_stok'];
		$sql = "UPDATE barang SET kode_barang='$kode_barang', Nama='$nama', harga='$harga', Gambar='$gambar' jml_stok='$jml_stok' WHERE ID='$kode_barang'";
		$query = mysqli_query($db, $sql);
		if( $query ) {
			header('Location: list-data_barang.php');
		} else {
			die("gagal menyimpan perubahan...");
		}
	} else {
		die("Akses dilarang... ");
	}
?>