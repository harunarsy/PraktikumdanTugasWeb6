<?php
$servername = "localhost";
$username = "root";
$dbname = "praktikum6tes";

// Untuk Memanggil File Lain
include "TugasKoneksi.php";
echo "<br>";

// Untuk Select (menampilkan) Data pada tabel yang diinginkan
$sql = "SELECT id_bt, nama, email, isi from buku_tamu";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	// Menampilkan Output Tabel
	while($row = mysqli_fetch_assoc($result)){
		echo "NO : ".$row["id_bt"]. "<br> NAMA : ".$row["nama"]. "<br> EMAIL : ".$row["email"]."<br> ISI : ".$row["isi"]. "<br> ======================================= <br>";
	}
} else {
	echo "0 result";
}
mysqli_close($conn);
	?>