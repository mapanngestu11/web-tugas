<?php
 include 'koneksi.php';

 $id_warga = $_GET['id_warga'];

 	$tambahdata = mysqli_query($koneksi, "DELETE from warga where id_warga ='$id_warga'");

 	if (!$tambahdata) {
		
		echo "<script> alert ('Proses Gagal !');window.location.href='data_warga.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data warga berhasil Di Hapus !');window.location.href='data_warga.php';</script>";		
	}

?>