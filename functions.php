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

	//$gambar = htmlspecialchars($data["gambar"]);
	//upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}

	//query insert ke database

	$query = "INSERT INTO data_spt
			VALUES 
			('', '$merk', '$harga', '$pengiriman', '$variation', '$pembayaran', '$gambar' )

			";

	mysqli_query ($koneksi, $query );
	return mysqli_affected_rows($koneksi);
	}


	function upload () {
		
		$namaFile = $_FILES['gambar']['name'];
		// $ukuranFile = $_FILES['gambar']['size'];
		// $error = $_FILES['gambar']['error'];
		// $tmpName = $_FILES['gambar']['tmp_name'];

		// //cek apakah tidak ada gambar yang diupload
		// if ($error === 4) {
		// 	echo "<script>
		// 			alert('pilih gambar dulu!');
		// 			</script>";
		// 		return false;
		// }


		//cek apakah file gambar yang diupload
	// 	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	// 	$ekstensiGambar = explode('.', $namaFile);
	// 	//$ekstensiGambar = $ekstensiGambar[1];
	// 	$ekstensiGambar = end($ekstensiGambar);
	// 	if( !in_array($ekstensiGambar, $ekstensiGambarValid ));
	// 		echo "<script>
	// 				alert('bukan gambar thu!');
	// 				</script>";
	// 				return false;
	// }

	
//lolos pengecekan, gambar siap diupload
	
	// $namaFileBaru = uniqid();
	// $namaFileBaru ='.';
	// $namaFileBaru = $ekstensiGambar;

	move_uploaded_file($namaFile);

	return false;
}


	function hapus($id) {
		global $koneksi;
		mysqli_query($koneksi, "DELETE FROM data_spt WHERE id = $id");

		return mysqli_affected_rows($koneksi);
	
}

function ubah($data){
    global $koneksi;

    $id = $data["id"];
    $merk = htmlspecialchars($data["merk"]);
    $harga = htmlspecialchars($data["harga"]);
    $pengiriman = htmlspecialchars($data["pengiriman"]);
    $variation = htmlspecialchars($data["variation"]);
    $pembayaran = htmlspecialchars($data["pembayaran"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query =" UPDATE data_spt SET 
               merk = '$merk',
               harga = '$harga',
               pengiriman = '$pengiriman',
               variation = '$variation',
               pembayaran = '$pembayaran',
               gambar = '$gambar'

            WHERE id = $id
         "; 

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

function cari($keyword) {
	$query = "SELECT * FROM  data_spt
				WHERE
				merk LIKE '%$keyword%' OR 
				harga LIKE '%$keyword%' OR
				pengiriman LIKE '%$keyword%' OR
				variation LIKE '%$keyword%' OR
				pembayaran LIKE '%$keyword%' 
				
	";

	return query($query);
}

function registrasi($data) {
	global $koneksi;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($koneksi, $data["password"]);
	$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);


	//cek username sudah ada atau belum
	$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc ($result)) {
		echo "<script>
				alert('username sudah terdaftar!')
				</script>";
				return false;
	}


	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
				</script>";
			return false;
	} 


	//enkripsi password

	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan user baru
	mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$username', '$password')");


	return mysqli_affected_rows($koneksi);


}





 ?>

