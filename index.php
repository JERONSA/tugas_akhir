<?php 
//cara pertama
//melakukan koneksi ke database
//mysqli_connect("localhost", "root", "", "sepatu");
//mengambil data dari tabel data_spt/query data sepatu
//mysqli_query("localhost", "root", "", "data_spt")
//cara kedua
//melakukan koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "sepatu");
//mengambil data dari tabel data_spt/query data sepatu
$result = mysqli_query($koneksi,"SELECT * FROM data_spt");
var_dump($result);

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
 <tr>
 	<td>1</td>
 	<td>
 	<a href="">ubah</a>
 	<a href="">hapus</a>
 </td>
 <td>
 	<img src="img/sepatu1.jpg" width="50">
 </td>
 <td>Jimmy Choo</td>
 <td>695.000</td>
 <td>Luar Negeri</td>
 <td>36,37,38,39,40</td>
 <td>Bisa COD</td>
 </tr>
 	</table>
  </body>
 </html>


 