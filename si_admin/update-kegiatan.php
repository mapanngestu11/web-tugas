<?php

session_start();

include 'koneksi.php';

$id_kegiatan  = $_POST ['id_kegiatan'];
$nama_kegiatan = $_POST['nama_kegiatan'];

$rincian = $_POST['rincian'];


$sql = "UPDATE `kegiatan` SET `nama_kegiatan` = '$nama_kegiatan', `rincian` = '$rincian'
				 WHERE `kegiatan`.`id_kegiatan` = '$id_kegiatan';";
		$tambahdata=mysqli_query($koneksi,$sql);

		if (!$tambahdata) {
		
		echo "<script> alert ('Proses Gagal !');window.location.href='kegiatan.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Kegiatan Warga berhasil Di Update !');window.location.href='kegiatan.php';</script>";		
	}


	


?>