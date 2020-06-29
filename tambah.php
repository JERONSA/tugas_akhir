<?php 
//koneksi DBMS
require "functions.php";


//cek apakah tombol submit sudah ditekaan atau belum?
if (isset($_POST["submit"])) {
	//cek apakah data berhasil ditambahkan atau tidak
	if (tambah($_POST) > 0) {
		echo "
		<script>
		alert('Data Berhasil Disimpan!');
		document.location.href ='index.php';
		</script>
		";
	} else {
		echo "
		<script>
		alert('Data Gagal Disimpan!');
		document.location.href ='index.php';
		</script>
		";
	}
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
				<input type="text" name="merk" id="merk" required>
			</li>
			<li>
				<label for="harga">HARGA</label>
				<input type="text" name="harga" id="harga" required>
			</li>
			<li>
				<label for="pengiriman">PENGIRIMAN</label>
				<input type="text" name="pengiriman" id="pengiriman" required>
			</li>
			<li>
				<label for="variation">VARIATION</label>
				<input type="text" name="variation" id="variation" required>
			</li>
			<li>
				<label for="pembayaran">PEMBAYARAN</label>
				<input type="text" name="pembayaran" id="pembayaran" required>
			</li>
			<li>
				<label for="gambar">GAMBAR</label>
				<input type="text" name="gambar" id="gambar" required >
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