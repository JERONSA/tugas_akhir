<!-- <?php
include('functions.php');
$username=$_POST['username'];
$password=$_POST['password'];

 
$result = mysqli_query($koneksi, "SELECT * FROM user  WHERE username = '$username'");
 

$getUser = mysqli_num_rows($result);

//print_r($getUser); die();
$getDataUser = mysqli_fetch_array($result);
if ($getUser === 1) 
{
	

	if (password_verify($password,$getDataUser['password'])) 
	{
		session_start();
		$_SESSION['username']=$getDataUser['username'];
		header('location: index.php');
		//echo "Is Valid User";
	}
	else
	{
		echo "Invalid User";
	}	
	

}
else
{
	echo "Invalid User";
}



?> -->