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

// Menambahkan data ke tabel yang diinginkan, serta sesuai dengan isi valuenya dan kolomnya
$sql = "INSERT INTO liga (kode, negara, champion)
values ('ENG','England','3')";

if (mysqli_query($conn, $sql)){
	echo "Insert Data Successfully";
} else {
	echo "Error Insert Data: ". $sql ."<br>". mysqli_error($conn);
}
mysqli_close($conn);
	?>
</body>
</html>