<?php 
 
session_start();

if(!isset($_SESSION["login"])) 
{
 header("Location: login.php");
 exit;
}

require 'functions.php';

$sepatu = query("SELECT * FROM data_spt");

//tombol cari ditekan
if(isset($_POST["cari"]) ) {
	$sepatu = cari($_POST["keyword"]);
}

?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tugas CRUD By Jeniroan Adolfina Isabela Sabuna</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	</head>
 <body>
 	<!-- <a href="logout.php">Logout</a> -->
 	
 	<div class="container">
 	<a class="btn btn-info mt-3" href="tambah.php" >Tambah Data</a>
 	<a class="btn btn-info mt-3" href="logout.php" >Keluar</a>
 	
	<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-header bg-success text-white">
	    SEPATU WANITA BRANDED
	    </div>
	  <div class="card-body">

	  	<form action="" method="POST">
 		<input type="text" name="keyword" size="50" autofocus placeholder="masukkan keyword pencarian!" autocomplete="off">
 		<button type="submit" name="cari">Search</button> 
 		<br>
 		<br>
 		</form>
	  	<table class="table table-bordered table-striped">
	  		<tr>
			 	<th>No.</th>
			 	<th>Aksi</th>
			 	<th>Gambar</th>
			 	<th>Merk</th>
			 	<th>Harga</th>
			 	<th>Pengiriman</th>
			 	<th>Variation</th>
			 	<th>Pembayaran</th>
			 </tr>
	    <?php $i = 1; ?>
				<?php foreach($sepatu as $row) :?>

			 <tr>
			 	<td><?= $i; ?></td>
			 	<td>
			 	<a href="ubah.php?id=<?= $row["id"]; ?>">UBAH</a> <br>
			 	<a href="hapus.php?id=<?= $row["id"]; ?>">HAPUS</a>
			 </td>
			 <td>
			 	<img src="img/<?=$row['gambar']; ?>" width="50">
			 </td>
			 <td><?=$row['merk']; ?></td>
			 <td><?=$row['harga']; ?></td>
			 <td><?=$row['pengiriman']; ?></td>
			 <td><?=$row['variation']; ?></td>
			 <td><?=$row['pembayaran']; ?></td>
			 </tr>
			 <?php $i++; ?>
			<?php endforeach; ?>
			 	</table> 
			 	 <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
  </body>
 </html>


 