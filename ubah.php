<?php 

session_start();

if(!isset($_SESSION["login"])) 
{
 header("Location: login.php");
 exit;
}
//koneksi DBMS
require "functions.php";

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
                <option ></option>
                <option value="surabaya">Surabaya</option>
                <option value="jakarta">Jakarta</option>
                <option value="bandung">Bandung</option>
            </select>
            </div>
            <div class="form-group">
            <label>Variation</label>
            <select class="form-control" name="variation">
                <option></option>
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
                <option value="<?= $spt["pembayaran"]; ?>"><?= $spt["pembayaran"]; ?></option>
                <option value="transfer">ATM BERSAMA</option>
                <option value="kartu_kredit">Kartu Kredit</option>
                <option value="cod">Bisa COD</option>
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
