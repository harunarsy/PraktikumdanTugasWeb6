<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Demo Koneksi database MySQL</h1>
	<?php
	// melakukan koneksi ke mysql
	$conn = mysqli_connect("localhost","root","","praktikum6");

	//jika koneksi gagal maka akan muncul text failed to connect to mysql
	if (mysqli_connect_errno()){
		echo "Failed to Connect to MySQL: ".mysqli_connect_error();
		exit();
	}
	?>

</body>
</html>