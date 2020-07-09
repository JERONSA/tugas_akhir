<?php 
session_start();

// if (isset($_SESSION["login"])) {
// 	header("Location: index.php");
// 	exit;
// }

require 'functions.php';

if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($koneksi, "SELECT * FROM user  WHERE username = '$username'");

		//cek username
	if (mysqli_num_rows($result) === 1) {

	// cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])) {
			
			//setsession
			$SESSION["login"] = true;

			header("Location: index.php");
			exit;

		}
	}

		$error = true;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<?php if ( isset($error)): ?>
	    	<p style=""color: red; font-style: italic;>username/password salah</p>
	   <?php endif; ?>

</head>
<body>
<div class="container">

	<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Halaman Login
	    </div>
	  <div class="card-body">
	    <form method="POST" action=" cek_login.php " enctype="multipart/form-data">
	    	<div class="form-group">
	    	<label>Username </label>
	    	<input type="text" name="username" class="form-control" id="username">
	    	</div>
	    	<div class="form-group">
	    	<label>Password </label>
	    	<input type="password" name="password" class="form-control" id="password">
	    	</div>
	    	<button type="submit" class="btn btn-primary" name="login">LOGIN</button> 
	    </div>
	</div>
	    </form>
 <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
</body>
</html>