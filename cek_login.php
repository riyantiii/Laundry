<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from pengguna where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/halaman_admin.php");
 
	// cek jika user login sebagai kasir
	}else if($data['level']=="kasir"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "kasir";
		// alihkan ke halaman dashboard kasir
		header("location:kasir/halaman_kasir.php");
 
	// cek jika user login sebagai owner
	}else if($data['level']=="owner"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "owner";
		// alihkan ke halaman dashboard owner
		header("location:owner/halaman_owner.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>