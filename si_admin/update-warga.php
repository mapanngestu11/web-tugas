<?php

session_start();

include 'koneksi.php';

$id_warga  = $_POST ['id_warga'];
$nama_kk = $_POST['nama_kk'];
$nama_istri = $_POST['nama_istri'];
$jumlah_anak = $_POST['jumlah_anak'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

$sql = "UPDATE `warga` SET `nama_kk` = '$nama_kk', `nama_istri` = '$nama_istri', `jumlah_anak` = '$jumlah_anak', 
				`alamat` = '$alamat',`pekerjaan` = '$pekerjaan' WHERE `warga`.`id_warga` = '$id_warga';";
		$tambahdata=mysqli_query($koneksi,$sql);

		if (!$tambahdata) {
		
		echo "<script> alert ('Proses Gagal !');window.location.href='data_warga.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data warga berhasil Di Update !');window.location.href='data_warga.php';</script>";		
	}


	


?>