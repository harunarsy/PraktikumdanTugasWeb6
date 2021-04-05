<?php
$servername = "localhost";
$username = "root";
$dbname = "praktikum6tes";

// create koneksi
$conn = mysqli_connect($servername, $username,"",$dbname);

// cek Koneksi
if (!$conn) {
	die("Connection failed: ". mysqli_connect_error());
}

// membuat tabel sesuai dengan namanya dan beberapa informasi variabel serta formatting dari masing masing variabel tersebut
$sql = "CREATE TABLE liga (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
kode VARCHAR(3) NOT NULL,
negara VARCHAR(30) NOT NULL,
champion int(3)
)";
if (mysqli_query($conn, $sql)){
	// jika tabel sukses dibuat maka akan muncul tulisan berikut
	echo "Tabel Create Successfully";
} else {
	// notifikasi error dalam create tabel
	echo "Error Creating Tabel: ". $sql ."<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>