<?php 
require 'functions.php';
$sepatu = query("SELECT * FROM data_spt");
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Halaman Admin</title>
 </head>
 <body>
 <h1>Daftar Sepatu</h1>	
 <table border="1" cellpadding="10" cellspacing="0">
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
 	<a href="">ubah</a>
 	<a href="">hapus</a>
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
  </body>
 </html>


 