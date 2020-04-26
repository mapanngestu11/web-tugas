<?php
session_start();

include 'koneksi.php';


$nama_kk = $_POST['nama_kk'];
$nama_istri = $_POST['nama_istri'];
$jumlah_anak = $_POST['jumlah_anak'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST ['pekerjaan'];

$sql = "INSERT INTO `warga` (`id_warga`, `nama_kk`,`nama_istri`,`jumlah_anak`,`alamat`,`pekerjaan`) 
		VALUES (NULL, '$nama_kk','$nama_istri','$jumlah_anak','$alamat','$pekerjaan');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Terkirim');window.location.href='data_warga.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Warga Berhasil di Tambahkan ');window.location.href='data_warga.php';</script>";		
	}
	



?>