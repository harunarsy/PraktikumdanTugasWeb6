<?php
$servername = "localhost";
$username = "root";
$dbname = "praktikum6tes";

// Include untuk mengambil file lain
include "TugasKoneksi.php";
echo "<br>";
// Insert Value Ke Tabel Buku Tamu
$sql = "INSERT INTO buku_tamu (nama, email, isi)
values ('Daffa','muhammaddaffa868@gmail.com','Selamat Menikah!')";

if (mysqli_query($conn, $sql)){
	echo "Insert Data Successfully";
} else {
	echo "Error Insert Data: ". $sql ."<br>". mysqli_error($conn);
}
mysqli_close($conn);
	?>