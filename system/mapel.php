<!doctype html>
<html class="no-js" lang="en">

<?php 
    include '../dbconnect.php';
    include 'cek_login.php';

    if(isset($_POST['update'])){
        $kode_pel= $_POST['kode_pel'];
        $nama_pel = $_POST['nama_pel'];
        $nama_guru = $_POST['nama_guru'];

        $updatedata = mysqli_query($conn, "UPDATE mapel SET nama_pel='$nama_pel', nama_guru='$nama_guru' WHERE kode_pel='$kode_pel'");
        
        //cek apakah berhasil
        if ($updatedata){
            echo " <div class='alert alert-success'>
                <strong>Success!</strong> Redirecting you back in 1 seconds.
              </div>
            <meta http-equiv='refresh' content='1; url= mapel.php'/>  ";
            } else { echo "<div class='alert alert-warning'>
                <strong>Failed!</strong> Redirecting you back in 1 seconds.
              </div>
             <meta http-equiv='refresh' content='1; url= mapel.php'/> ";
            }
    };

    if(isset($_POST['hapus'])){
        $kode_pel= $_POST['kode_pel'];

        $delete = mysqli_query($conn,"delete from mapel where kode_pel='$kode_pel'");

        $deltabelkeluar = mysqli_query($conn,"delete from mapel where kode_pel='$kode_pel'");
        $deltabelmasuk = mysqli_query($conn,"delete from mapel where kode_pel='$kode_pel'");
        
        //cek apakah berhasil
        if ($delete && $deltabelkeluar && $deltabelmasuk){

            echo " <div class='alert alert-success'>
                <strong>Success!</strong> Redirecting you back in 1 seconds.
              </div>
            <meta http-equiv='refresh' content='1; url= mapel.php'/>  ";
            } else { echo "<div class='alert alert-warning'>
                <strong>Failed!</strong> Redirecting you back in 1 seconds.
              </div>
             <meta http-equiv='refresh' content='1; url= mapel.php'/> ";
            }
    };
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
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<!-- Start datatable css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
       
            <!-- header area end -->
			
            <!-- page title area start -->

            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="sidebar-menu">
            <div class="sidebar-header">
                    <a href="index.php"><img src="../logoo.png" alt="logo" width="85%"></a>
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
<?php
  $username = $_SESSION['username'];
  $query_user_login = mysqli_query($conn,"select * from login where username='$username'");
  
  $user_login = mysqli_fetch_array($query_user_login);
  ?>
                                <h2>Hi, <?php echo $user_login['nickname']; ?>!</h2>
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
                                <li><span>Data Mata Pelajaran</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                    </div>
                </div>
            </div>
                
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Daftar Mata Pelajaran</h2>
                                    <?php if ($_SESSION['role']=='stock'){?>
									<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Mata Pelajaran</button>
                                    <?php }?>
                                </div>
                                    <div class="data-tables datatable-dark">
										 <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
											<tr>
                                            	<th>No</th>
												<th>Kode Pelajaran</th>
												<th>Nama Pelajaran</th>
												<th>Nama Guru</th>
                                                <?php if ($_SESSION['role']=='stock'){?>
                                                <th>Opsi</th>
                                                <?php }?>
											</tr></thead><tbody>
											<?php 
											$brgs=mysqli_query($conn,"SELECT * from mapel order by kode_pel ASC");
											$no=1;
											while($p=mysqli_fetch_array($brgs)){
                                                $idb = $p['kode_pel'];
												?>
												
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $p['kode_pel'] ?></td>
													<td><?php echo $p['nama_pel'] ?></td>
													<td><?php echo $p['nama_guru'] ?></td>
                                                   <?php if ($_SESSION['role']=='stock'){?>
                                                    <td><button data-toggle="modal" data-target="#edit<?=$idb;?>" class="btn btn-warning">Edit</button> <button data-toggle="modal" data-target="#del<?=$idb;?>" class="btn btn-danger">Del</button></td>
                                                    <?php }?>
												</tr>


                                                <!-- The Modal -->
                                                    <div class="modal fade" id="edit<?=$idb;?>">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <form method="post">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                            <h4 class="modal-title">Edit Kelas
																	<?php echo $p['nama_pel']?> - <?php echo $p['nama_guru']?>
                                                            </h4>
                                                            	<button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                          
                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                            
                                                            <label for="nama">Nama Pelajaran</label>
                                                            <input type="text" id="nama_pel" name="nama_pel" class="form-control" value="<?php echo $p['nama_pel'] ?>">

                                                            <label for="jenis">Nama Guru</label>
                                                            <input type="text" id="nama_guru" name="nama_guru" class="form-control" value="<?php echo $p['nama_guru'] ?>">
                                                            <input type="hidden" name="kode_pel" value="<?=$idb;?>">

                                                            
                                                            </div>
                                                            
                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                           		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            	<button type="submit" class="btn btn-success" name="update">Save</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>



                                                    <div class="modal fade" id="del<?=$idb;?>">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <form method="post">
                                                            <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Mata Pelajaran <?php echo $p['nama_pel']?> - <?php echo $p['nama_guru']?></h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus mapel ini dari daftar?
                                                            <input type="hidden" name="kode_pel" value="<?=$idb;?>">
                                                            </div>
                                                            
                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-success" name="hapus">Hapus</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>


												<?php 
											}
											?>
										</tbody>
										</table>
                                    </div>
									<a href="exportstkbhn3.php" target="_blank" class="btn btn-info">Export Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>

        <footer>
        </footer>

    </div>

			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Masukkan Data Pelajaran</h4>
						</div>
						<div class="modal-body">
							<form action="tmb_pel.php" method="post">
								<div class="form-group">
									<label>Kode Pelajaran</label>
									<input name="kode_pel" type="text" class="form-control" placeholder="Masukkan ID Kelas" required>
								</div>
								<div class="form-group">
									<label>Nama Pelajaran</label>
									<input name="nama_pel" type="text" class="form-control" placeholder="Masukkan Nama Pelajaran">
								</div>
								<div class="form-group">
									<label>Nama Guru</label>
									<input name="nama_guru" type="text" class="form-control" placeholder="Masukkan Nama Guru">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<input type="submit" class="btn btn-primary" value="Simpan">
							</div>
						</form>
					</div>
				</div>
			</div>
	
	<script>
		$(document).ready(function() {
		$('input').on('keydown', function(event) {
			if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event.shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
			   var $t = $(this);
			   event.preventDefault();
			   var char = String.fromCharCode(event.keyCode);
			   $t.val(char + $t.val().slice(this.selectionEnd));
			   this.setSelectionRange(1,1);
			}
		});
	});
	
	$(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
	} );
	</script>
	
	<!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- Start datatable js -->
	 <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
	
	
</body>

</html>
