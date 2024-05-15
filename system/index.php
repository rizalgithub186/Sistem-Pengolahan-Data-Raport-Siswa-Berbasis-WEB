<!doctype html>
<html class="no-js" lang="en">

<?php 
    include '../dbconnect.php';
    include 'cek_login.php';
?>

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SD Negeri 1 Bayem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        <div class="sidebar-menu">
            <div class="sidebar-header">
                    <center>
                    <a href="index.php"><img src="../logoo.png" alt="logo" width="85%"></a>
            		</center>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
							<li class="active"><a href="index.php"><span>SD Negeri 1 Bayem</span></a></li>
                            <li>
                                <a href="kelas.php"><i class="ti-dashboard"></i><span>Kelas</span></a>
                            </li>
                            <li>
                                <a href="siswa.php"><i class="ti-dashboard"></i><span>Siswa</span></a>
                            </li>
                            <li>
                                <a href="mapel.php"><i class="ti-dashboard"></i><span>Mata Pelajaran</span></a>
                            </li>
                            <li>
                                <a href="nilai.php"><i class="ti-dashboard"></i><span>Nilai</span></a>
                            </li>
                            <li>
       
                            <li>
                                <a href="logout.php"><span>Logout</span></a>                
                            </li>      
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="header-area">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                            <?php
  $username = $_SESSION['username'];
  $query_user_login = mysqli_query($conn,"select * from login where username='$username'");
  
  $user_login = mysqli_fetch_array($query_user_login);
  ?>
                                <h2>Hi, <?php echo $user_login['nickname']; ?>!</h2>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
								<script type='text/javascript'>
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
			
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right" style="color:black; padding:0px;">
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card">
                            <div class="card-body">
                                <div>
									<h2 align="center">Selamat Datang di SD Negeri 1 Bayem Kutoarjo</h2> <br>
                                </div>
                                 <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                           <center><img src="assets/images/coverr.jpg" width="850" height="400"></center>
                        </div>
                        <div class="panel-footer">
                        <p></p>
                        <br>
                             <p align="center">SD NEGERI 1 BAYEM KUTOARJO adalah salah satu satuan pendidikan dengan jenjang SD di KEL.BAYEM, Kec. Kutoarjo, Kab. Purworejo, Jawa Tengah 54215. Dalam menjalankan kegiatannya, SD NEGERI 1 BAYEM  KUTOARJO berada di bawah naungan Kementerian Pendidikan dan Kebudayaan. Selain itu, menggunakan kurikulum 2013 selain itu SD NEGERI 1 BAYEM KUTOARJO memiliki akreditasi A, berdasarkan sertifikat 489/BAN-SM/SK/2019. </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <script src="assets/js/line-chart.js"></script>
    <script src="assets/js/pie-chart.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
