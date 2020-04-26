<?php

session_start();

include 'koneksi.php';

$username= $_POST['username'];

$password = $_POST['password'];


$sql = "UPDATE `user` SET `username` = '$username', `password` = '$password'
				 WHERE `user`.`username` = '$username';";
		$tambahdata=mysqli_query($koneksi,$sql);

		if (!$tambahdata) {
		
		echo "<script> alert ('Proses Gagal !');window.location.href='index.php';</script>";		
	}
	else{
		
		echo "<script> alert ('password berhasil Di Update !');window.location.href='index.php';</script>";		
	}


	


?>