<?php 
//cara pertama
//melakukan koneksi ke database
//mysqli_connect("localhost", "root", "", "sepatu");
//mengambil data dari tabel data_spt/query data sepatu
//mysqli_query("localhost", "root", "", "data_spt")
//cara kedua
//melakukan koneksi ke database
//mysqli_connect("localhost", "root", "", "sepatu");
// membuat variabel untuk memudahkan penjulisan pada pemanggilan queery
$koneksi = mysqli_connect("localhost", "root", "", "sepatu");
//mengambil data dari tabel data_spt/query data sepatu
//mysqli_query($koneksi,"SELECT * FROM data_spt");
//membuat variabel baru untuk mengecek data nya sudah konek atau belum
$result = mysqli_query($koneksi,"SELECT * FROM data_spt");
//mengecek dengan var_dump
//var_dump($result);
//mengambil data (fetch) sepatu dari object result
//mysqli_fetch_row(); mengembalikan array numerik
//mysqli_fetch_assoc(); mengembalikan array asosiaativ
//mysqli_fetch_array(); mengembalikan array numerik dan array assosiativ
//mysqli_fetch_object();

$spt = mysqli_fetch_object($result);
var_dump($spt["merk"]);





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


 