<?php
include '../koneksi.php';

$NIK = $_POST['NIK'];
$nama_tamu = $_POST['nama_tamu'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];


		$query = "UPDATE tb_tamu SET NIK = '$NIK', nama_tamu = '$nama_tamu', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin' WHERE NIK = '$NIK'";

		$query2 = "UPDATE tb_pengguna SET nama_pengguna = '$nama_tamu', no_hp = '$no_hp' WHERE password = '$NIK'";


		$result =mysqli_query($koneksi, $query);

		if (!$result){
			die("query gagal dijalankan :".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		}
		else {
		echo "<script>alert('data berhasil ditambah.');window.location='tamu.php';</script>";
		}

		$result2 =mysqli_query($koneksi, $query2);
		
		if (!$result2){
			die("query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		 }
		 else {
		 echo "<script>alert('data berhasil ditambah.');window.location='tamu.php';</script>";
		 }

?>