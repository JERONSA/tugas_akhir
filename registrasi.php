<?php 
require 'functions.php';

if (isset($_POST["register"])) {

	if(registrasi($_POST) > 0 ) {
		echo "<script>
  				alert('user baru berhasil ditambahkan');
  				</sript>";
	} else {
		echo mysqli_error($koneksi);
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="container">

	<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Halaman Registrasi
	  </div>
	  <div class="card-body">
	    <form method="POST" action="" enctype="multipart/form-data">
	    	<div class="form-group">
	    	<label>Username :</label>
	    	<input type="text" name="username" class="form-control" id="username">
	    	</div>
	    	<div class="form-group">
	    	<label>Password :</label>
	    	<input type="password" name="password" class="form-control" id="password">
	    	</div>
	    	<div class="form-group">
	    	<label>konfirmasi Password  :</label>
	    	<input type="password" name="password2" class="form-control" id="password2">
	    	</div>
	    	<button type="submit" class="btn btn-primary" name="register">Registrasi</button> 
	    </div>
	</div>
	    </form>

 <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
</body>
</html>