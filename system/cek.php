<?php
	include '../dbconnect.php';

session_start();

// terima data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// untuk mencegah sql injection
// kita gunakan mysql_real_escape_string


// cek data yang dikirim, apakah kosong atau tidak


$uname = mysqli_real_escape_string($conn,$_POST['username']);
$upass = mysqli_real_escape_string($conn,md5($_POST['password']));

$query = mysqli_query($conn,"select * from login where username='$uname' and password='$upass';");

$data = mysqli_fetch_array($query);

if(mysqli_num_rows($query)==1){//jika berhasil akan bernilai 1

$_SESSION['username'] = $data['username'];
$_SESSION['role'] = $data['role'];
$_SESSION['nickname'] = $data['nickname'];

if($data['role']=='stock'){
		header('location:index.php');
}
	else if($data['role']=='kepsek'){
		header('location:index.php');
	}
}
 else {
	// kalau username ataupun password tidak terdaftar di database
	header('location:login.php?error=4');
}
?>