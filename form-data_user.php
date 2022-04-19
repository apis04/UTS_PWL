<!DOCTYPE html>
<html>
	<head>
		<title>TOKO ABC</title>
	</head>
	<body>
    <h1>FORMULIR TAMBAH DATA USER</h1>
		<form action="proses-data_user.php" method="POST">
			<fieldset>
				<p>
					<label for="Kode">Kode_User: </label>
					<input type="text" name="Kode" placeholder="Kode User " />
				</p>
				<p>
					<label for="Nama">Nama: </label>
					<textarea name="Nama"></textarea>
				</p>
				<p>
					<label for="Email">Email: </label>
					<textarea name="Email"></textarea>
                </p>
                <p>
					<label for="Telp">Telp: </label>
					<textarea name="Telp"></textarea>
                </p>
                <p>
					<label for="Password">Password: </label>
					<textarea name="Password"></textarea>
                 </p>
                <p>
					<label for="Peran">Peran: </label>
					<textarea name="Peran"></textarea>
                 </p>
                 <p>
					<input type="submit" name="tambah" value="Tambah" />
				</p>
			</fieldset>
		</form>
	</body>
</html>