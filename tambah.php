<?php 
//koneksi DBMS
$koneksi = mysqli_connect("localhost", "root", "", "Sepatu");


//cek apakah tombol submit sudah ditekaan atau belum?
if (isset($_POST["submit"])) {
	//ambil data dimasing-masing form/elemen
	$merk = $_POST["merk"];
	$harga = $_POST["harga"];
	$pengiriman = $_POST["pengiriman"];
	$variation = $_POST["variation"];
	$pembayaran = $_POST["pembayaran"];
	$gambar = $_POST["gambar"];

	//query insert ke database

	$query = "INSERT INTO data_spt
			VALUES 
			('', '$merk', '$harga', '$pengiriman', '$variation', '$pembayaran', '$gambar )

			";

	mysqli_query ($koneksi, $query );
//cek apakah data berhasil ditambahkan atau tidak
	var_dump(mysqli_affected_rows($koneksi));
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Data</title>
</head>
<body>
	<h1>Tambah Data Sepatu</h1> 
	<form action="" method= "POST">
		<ul>
			<li>
				<label for="merk">MERK</label>
				<input type="text" name="merk" id="merk">
			</li>
			<li>
				<label for="harga">HARGA</label>
				<input type="text" name="harga" id="harga">
			</li>
			<li>
				<label for="pengiriman">PENGIRIMAN</label>
				<input type="text" name="pengiriman" id="pengiriman">
			</li>
			<li>
				<label for="variation">VARIATION</label>
				<input type="text" name="variation" id="variation">
			</li>
			<li>
				<label for="pembayaran">PEMBAYARAN</label>
				<input type="text" name="pembayaran" id="pembayaran">
			</li>
			<li>
				<label for="gambar">GAMBAR</label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<br>
			<br>
			<li>
			<button type="submit" name="submit">SIMPAN</button>
			</li>
		</ul>
	</form>


</body>
</html>