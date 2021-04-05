<?php
$servername = "localhost";
$username = "root";

// menyambungkan koneksi
$conn = mysqli_connect($servername, $username,"");

//cek koneksi, jika gagal akan muncul connect error
if (!$conn) {
	die("Connection failed: ". mysqli_connect_error());
}

// membuat nama database
$sql = "CREATE DATABASE praktikum6tes";
if (mysqli_query($conn, $sql)){
	echo "Database Create Successfully";
} else {
	echo "Error Creating Database: ". mysqli_error($conn);
}
mysqli_close($conn);
?>