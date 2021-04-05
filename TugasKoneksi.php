<!DOCTYPE html>
<html>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$dbname = "praktikum6tes";
	$conn = mysqli_connect($servername, $username, "", $dbname);

	// Cek Koneksi Ke Database
	if (mysqli_connect_errno()){
		echo "Failed to Connect to MySQL: ".mysqli_connect_error();
		exit();
	}
	echo "KONEKSI BERHASIL <br>";
	?>

</body>
</html>