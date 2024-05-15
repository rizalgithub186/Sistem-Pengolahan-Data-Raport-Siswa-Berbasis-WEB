<?php 
include '../dbconnect.php';
$id_kelas= $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$nama_walkes = $_POST['nama_walkes'];
	  
$query = mysqli_query($conn,"insert into kelas values('$id_kelas','$nama_kelas','$nama_walkes')");
if ($query){

echo " <div class='alert alert-success'>
    <strong>Success!</strong> Redirecting you back in 1 seconds.
  </div>
<meta http-equiv='refresh' content='1; url= kelas.php'/>  ";
} else { echo "<div class='alert alert-warning'>
    <strong>Failed!</strong> Redirecting you back in 1 seconds.
  </div>
 <meta http-equiv='refresh' content='1; url= kelas.php'/> ";
}
 
?>
 
  <html>
<head>
  <title>Tambah Mata Pelajaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>