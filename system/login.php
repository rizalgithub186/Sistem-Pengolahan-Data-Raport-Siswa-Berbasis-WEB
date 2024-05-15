<?php 
session_start();

include '../dbconnect.php';

if (!empty($_SESSION['username'])) {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Page Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
    body {
        background-image:url('assets/images/coverr.jpg'); background-size:cover
}
</style> 
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading"><center>
                        <img src="assets/images/logoo.png" width="130" height="150">
                        
                        <p></p>
                        <br>
                        <h3 class="panel-title">SISTEM PENGOLAH DATA RAPORT SISWA</h3>
                        <h3 class="panel-title">SD Negeri 1 Bayem Kutoarjo</h3></center>
                    </div>

            <?php
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
            $error = $_GET['error'];
            
            if ($error == 1) {
            ?>
            <div class="error">Username dan Password belum diisi.</div>
            <?php } else if ($error == 2) {?>
            <div class="alert alert-danger">Username belum diisi.</div>
            <?php } else if ($error == 3) {?>
            <div class="alert alert-danger">Password belum diisi.</div>
            <?php } else if ($error == 4) {?>
            <div class="alert alert-danger">Username dan Password tidak terdaftar.</div>
            <?php } ?>

                    <div class="panel-body">
                        <form action="cek.php" method="post">
                            <fieldset>
                            <h4 class="panel-title">Silahkan Login</h4>
                            <br>
                                 <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-user"></i></span> 
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-lock"></i></span>
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Masuk</button> 
                            </fieldset>
                        </form>
                    </div>
                

                </div>
            </div>
        </div>
    </div>



<?php 
    include('footer.php');
?>
