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
	$merk = htmlspecialchars($data["merk"]);
	$harga = htmlspecialchars($data["harga"]);
	$pengiriman = htmlspecialchars($data["pengiriman"]);
	$variation = htmlspecialchars($data["variation"]);
	$pembayaran = htmlspecialchars($data["pembayaran"]);
	$gambar = htmlspecialchars($data["gambar"]);

	//query insert ke database

	$query = "INSERT INTO data_spt
			VALUES 
			('', '$merk', '$harga', '$pengiriman', '$variation', '$pembayaran', '$gambar' )

			";

	mysqli_query ($koneksi, $query );
	return mysqli_affected_rows($koneksi);
	}

	function hapus($id) {
		global $koneksi;
		mysqli_query($koneksi, "DELETE FROM data_spt WHERE id = $id");

		return mysqli_affected_rows($koneksi);
	}

 ?>

