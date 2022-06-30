<?php 

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "day12_project01";

	// Buat koneksi database
	$connection = new mysqli($hostname, $username, $password, $database);

	// // Periksa Koneksi
	// if($connection->connect_error){
	// 	echo "Koneksi gagal";

	// } else {
	// 	echo "Koneksi berhasil...";
	// }

?>
