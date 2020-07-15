<?php 

// session_start();

// if(!isset($_SESSION["login"])) {
//  header("Location: login.php");
//  exit;
// }
//koneksi DBMS
require 'functions.php';

//ambil data di url
$id = $_GET ["id"];

$spt = query("SELECT * FROM data_spt WHERE id = $id") [0];


//cek apakah tombol submit sudah ditekaan atau belum?
if (isset($_POST["submit"])) {
    //cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0 ) {
        echo "
        <script>
        alert('Data Berhasil Diubah!');
        document.location.href ='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diubah!');
        document.location.href ='index.php';
        </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Update Data</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">

    <!-- Awal Card Form -->
    <div class="card mt-3">
      <div class="card-header bg-primary text-white">
        Form Update Data Sepatu
      </div>
      <div class="card-body">
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?= $spt["id"]; ?>">
            <div class="form-group">
            <label>Merk </label>
            <input type="text" name="merk" class="form-control" id="merk" required value="<?= $spt["merk"]; ?>">
            </div>
            <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" id="harga" required value="<?= $spt["harga"]; ?>">
            </div>
            <div class="form-group">
            <label>Pengiriman </label>
            <select class="form-control" name="pengiriman">
                <option value="<?= $spt["pengiriman"]; ?>"></option>
                <option value="Surabaya">Surabaya</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Bandung">Bandung</option>
            </select>
            </div>
            <div class="form-group">
            <label>Variation</label>
            <select class="form-control" name="variation">
                <option value="<?= $spt["variation"]; ?>"></option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                </select>
            </div>
            <div class="form-group">
            <label>Pembayaran </label>
            <select class="form-control" name="pembayaran">
                <option value="<?= $spt["pembayaran"]; ?>"></option>
                <option value="ATM BERSAMA">ATM BERSAMA</option>
                <option value="KARTU KREDIT">Kartu Kredit</option>
                <option value="BISA COD">Bisa COD</option>
                </select>
            </div>
            <div class="form-group">
            <label>Gambar</label>
            <input type="text" name="gambar" class="form-control" id="gambar" required value="<?= $spt["gambar"]; ?>">
            </div>
             <button type="submit" class="btn btn-primary" name="submit">Ubah</button> 
            
        </div>
           
        </form>
      </div>
    </div>
    <!-- Akhir Card Form -->
    </div>

    <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
</body>
</html>
