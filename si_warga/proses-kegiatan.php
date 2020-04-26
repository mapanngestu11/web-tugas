<?php
session_start();

include 'koneksi.php';


$nama_kegiatan = $_POST['nama_kegiatan'];
$tgl = $_POST['tgl'];
$rincian = $_POST['rincian'];

$sql = "INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `tgl`, `rincian`) 
		VALUES (NULL, '$nama_kegiatan', '$tgl', '$rincian');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Terkirim');window.location.href='kegiatan.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Kegiatan Warga Berhasil di Tambahkan ');window.location.href='kegiatan.php';</script>";		
	}
	



?>