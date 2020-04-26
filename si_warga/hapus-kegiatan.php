<?php
 include 'koneksi.php';

 $id_kegiatan = $_GET['id_kegiatan'];

 	$tambahdata = mysqli_query($koneksi, "DELETE from kegiatan where id_kegiatan ='$id_kegiatan'");

 	if (!$tambahdata) {
		
		echo "<script> alert ('Proses Gagal !');window.location.href='kegiatan.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data Kegiatan berhasil Di Hapus !');window.location.href='kegiatan.php';</script>";		
	}

?>