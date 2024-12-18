<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "potter_no_counter";
$koneksi = mysqli_connect($host,$user,$pass,$db);

if (!$koneksi) {
	die("koneksi dengan database gagal: ".mysqli_connect_error());
	# code...
}

?>