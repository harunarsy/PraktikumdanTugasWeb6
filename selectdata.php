<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$dbname = "praktikum6tes";

//create koneksi
$conn = mysqli_connect($servername, $username,"",$dbname);

//cek koneksi
if (!$conn) {
	die("Connection failed: ". mysqli_connect_error());
}

// select data sesuai dengan tabel isi
$sql = "SELECT kode, negara, champion from liga";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	// Membuat output data yang telah di select
	while($row = mysqli_fetch_assoc($result)){
		echo "kode : ".$row["kode"]. " - Negara : ".$row["negara"]. " - champion : ".$row["champion"]. "<br>";
	}
} else {
	echo "0 result";
}
mysqli_close($conn);
	?>
</body>
</html>