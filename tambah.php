<?php 

// session_start();

// if(!isset($_SESSION["login"])) {
//  header("Location: login.php");
//  exit;
// }

//koneksi DBMS
require 'functions.php';


//cek apakah tombol submit sudah ditekaan atau belum?
if (isset($_POST["submit"])) {

	//cek apakah data berhasil ditambahkan atau tidak
	if (tambah($_POST) > 0 ) {
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
	<title>Katalog Sepatu Wanita Branded</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">

	<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Form Input Data Sepatu
	  </div>
	  <div class="card-body">
	    <form method="post" action="" enctype="multipart/form-data">
	    	<div class="form-group">
	    	<label>Merk </label>
	    	<input type="text" name="merk" class="form-control" id="merk" required>
	    	</div>
	    	<div class="form-group">
	    	<label>Harga</label>
	    	<input type="text" name="harga" class="form-control" id="harga" required>
	    	</div>
	    	<div class="form-group">
	    	<label>Pengiriman </label>
	    	<select class="form-control" name="pengiriman">
	    		<option></option>
	    		<option value="surabaya">Surabaya</option>
	    		<option value="jakarta">Jakarta</option>
	    		<option value="bandung">Bandung</option>
	    	</select>
	    	</div>
	    	<div class="form-group">
	    	<label>Variation</label>
	    	<input type="text" name="variation" class="form-control" id="variation" required>
	    	</div>
	    	<div class="form-group">
	    	<label>Pembayaran </label>
	    	<select class="form-control" name="pembayaran">
	    		<option></option>
	    		<option value="transfer">ATM BERSAMA</option>
	    		<option value="kartu_kredit">KARTU KREDIT</option>
	    		<option value="cod">BISA COD</option>
	    		</select>
	    	<div class="form-group">
	    	<label>Gambar</label>
	    	<input type="text" name="gambar" class="form-control" id="gambar">
	    	</div>
	    	<button type="submit" class="btn btn-primary" name="submit">Simpan</button>
	    </div>
			</form>
	  </div>
	</div>
	<!-- Akhir Card Form -->
	</div>
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
</body>
</html>
