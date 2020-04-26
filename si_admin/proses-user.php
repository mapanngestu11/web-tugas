<?php
session_start();

include 'koneksi.php';


$username = $_POST['username'];
$password = $_POST['password'];
$level    = $_POST['level'];

$sql = "INSERT INTO `user` (`id_user`, `username`, `password`,`level`) 
		VALUES (NULL, '$username', '$password', '$level');";
	$tambahdata = mysqli_query($koneksi,$sql);

	if (!$tambahdata) {
		
		echo "<script> alert ('Gagal Terkirim');window.location.href='user.php';</script>";		
	}
	else{
		
		echo "<script> alert ('Data User Berhasil di Tambahkan ');window.location.href='user.php';</script>";		
	}
	



?>