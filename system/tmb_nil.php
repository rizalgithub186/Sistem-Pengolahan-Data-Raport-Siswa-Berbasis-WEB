<?php 
include '../dbconnect.php';
        $kode = $_POST['kode'];
        $nis_sis = $_POST['nis_sis'];
        $nama_sis = $_POST['nama_sis'];
		$kelas_sis = $_POST['kelas_sis'];
        $pai = $_POST['pai'];
        $pkn = $_POST['pkn'];
		$bandoi = $_POST['bandoi'];
        $mtk = $_POST['mtk'];
        $ipa = $_POST['ipa'];
		$ips = $_POST['ips'];
        $binggris = $_POST['binggris'];
		$senibudaya = $_POST['senibudaya'];
        $penjas = $_POST['penjas'];
        $prakarya = $_POST['prakarya'];
	  
$query = mysqli_query($conn,"insert into nilai2 values('$kode','$nis_sis','$nama_sis','$kelas_sis','$pai','$pkn','$bandoi','$mtk','$ipa','$ips','$binggris','$senibudaya','$penjas','$prakarya')");
if ($query){

echo " <div class='alert alert-success'>
    <strong>Success!</strong> Redirecting you back in 1 seconds.
  </div>
<meta http-equiv='refresh' content='1; url= nilai.php'/>  ";
} else { echo "<div class='alert alert-warning'>
    <strong>Failed!</strong> Redirecting you back in 1 seconds.
  </div>
 <meta http-equiv='refresh' content='1; url= nilai.php'/> ";
}
 
?>
 
  <html>
<head>
  <title>Tambah Nilai</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>