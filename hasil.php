<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hasil</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
$host= "localhost";
$user= "root";
$pass= "";

$email=$_GET['email'];
$Full_name=$_GET['Full_name'];
$Username=$_GET['Username'];
$password=$_GET['password'];
if($Full_name)
	
{
	$koneksi= mysqli_connect($host, $user, $pass);
	mysqli_select_db ($koneksi,'dblogin');
	$sql="insert into tinstagram values('$email', '$Full_name', '$Username', '$password')";
	$hasil=mysqli_query($koneksi,$sql);
}
if ($koneksi->connect_errno) {
	echo "Gagal koneksi ke server";
}

?>

<div id="container">
	<div class="Header">
		Verify
	</div>

	<div class="hasil">
		<div class="email">
			Email or Number Phone: <?php echo" $email" ?><br>
		</div>

		<div class="Full_name">
			Full name : <?php echo "$Full_name"; ?><br>
		</div>

		<div class="Username">
			Username  : <?php echo "$Username"; ?><br>
		</div>

		<div class="password">
			Password : <?php echo "$password"; ?><br>
		</div>
		
		
	</div>
</div>




</body>
</html>
