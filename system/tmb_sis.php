<?php 
include '../dbconnect.php';
        $nis_sis= $_POST['nis_sis'];
        $nisn_sis = $_POST['nisn_sis'];
        $nama_sis = $_POST['nama_sis'];
		$kelas_sis = $_POST['kelas_sis'];
	  
$query = mysqli_query($conn,"insert into siswa2 values('$nis_sis','$nisn_sis','$nama_sis','$kelas_sis')");
if ($query){

echo " <div class='alert alert-success'>
    <strong>Success!</strong> Redirecting you back in 1 seconds.
  </div>
<meta http-equiv='refresh' content='1; url= siswa.php'/>  ";
} else { echo "<div class='alert alert-warning'>
    <strong>Failed!</strong> Redirecting you back in 1 seconds.
  </div>
 <meta http-equiv='refresh' content='1; url= siswa.php'/> ";
}
 
?>
 
  <html>
<head>
  <title>Tambah Siswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>