<?php

session_start();

include 'koneksi.php';

$id_user  = $_POST ['id_user'];
$username= $_POST['username'];

$level = $_POST['level'];


$sql = "UPDATE `user` SET `username` = '$username', `level` = '$level'
				 WHERE `user`.`id_user` = '$id_user';";
		$tambahdata=mysqli_query($koneksi,$sql);

		if (!$tambahdata) {
		
		echo "<script> alert ('Proses Gagal !');window.location.href='user.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data User Warga berhasil Di Update !');window.location.href='user.php';</script>";		
	}


	


?>