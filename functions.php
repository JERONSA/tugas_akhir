<?php 
//melakukan koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "sepatu");



function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
	}

	function tambah ($data)
	{
	global $koneksi;
	$merk = $data["merk"];
	$harga = $data["harga"];
	$pengiriman = $data["pengiriman"];
	$variation = $data["variation"];
	$pembayaran = $data["pembayaran"];
	$gambar = $data["gambar"];

	//query insert ke database

	$query = "INSERT INTO data_spt
			VALUES 
			('', '$merk', '$harga', '$pengiriman', '$variation', '$pembayaran', '$gambar' )

			";

	mysqli_query ($koneksi, $query );
	return mysqli_affected_rows($koneksi);

	}
 ?>

