<?php
	$host = "localhost";
	$user = "admin";
	$password = "";
	$db = "db.latihan";

	$koneksi = mysqli_connect($host, $user, $password, $database, $koneksi);

	mysql_select_db($database, $koneksi);

	//Periksa koneksi
	if($koneksi) {
		echo "Berhasil, terhubung";
	} else {
		echo "Maaf, koneksi GAGAL, terhubung";
	}
?>
