<!doctype html>
<html class="no-js" lang="en">

<?php 
    include '../dbconnect.php';
    include 'cek_login.php';

    if(isset($_POST['update'])){
        $kode = $_POST['kode'];
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

        $updatedata = mysqli_query($conn, "UPDATE nilai2 SET pai='$pai', pkn='$pkn', bandoi='$bandoi', mtk='$mtk', ipa='$ipa', ips='$ips',binggris='$binggris', senibudaya='$senibudaya', penjas ='$penjas ', prakarya='$prakarya' WHERE kode='$kode'");
        
        //cek apakah berhasil
        if ($updatedata){
            echo " <div class='alert alert-success'>
                <strong>Success!</strong> Redirecting you back in 1 seconds.
              </div>
            <meta http-equiv='refresh' content='1; url= nilai.php'/>  ";
            } else { echo "<div class='alert alert-warning'>
                <strong>Failed!</strong> Redirecting you back in 1 seconds.
              </div>
             <meta http-equiv='refresh' content='1; url= nilai.php'/> ";
            }
    };

    if(isset($_POST['hapus'])){
        $kode = $_POST['kode'];

        $delete = mysqli_query($conn,"delete from nilai2 where kode='$kode'");

        $deltabelkeluar = mysqli_query($conn,"delete from nilai2 where kode='$kode'");
        $deltabelmasuk = mysqli_query($conn,"delete from nilai2 where kode='$kode'");
        
        //cek apakah berhasil
        if ($delete && $deltabelkeluar && $deltabelmasuk){

            echo " <div class='alert alert-success'>
                <strong>Success!</strong> Redirecting you back in 1 seconds.
              </div>
            <meta http-equiv='refresh' content='1; url= nilai.php'/>  ";
            } else { echo "<div class='alert alert-warning'>
                <strong>Failed!</strong> Redirecting you back in 1 seconds.
              </div>
             <meta http-equiv='refresh' content='1; url= nilai.php'/> ";
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
       
			
            <!-- page title area start -->
            <!-- page title area end -->

        <!-- sidebar menu area end -->
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
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
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
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
								<script type='text/javascript'>
						<!--
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
						//-->
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
                <!-- market value area start -->
                            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Data Nilai Siswa</span></li>
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
									<h2>Daftar Nilai</h2>
                                    <?php if ($_SESSION['role']=='stock'){?>
									<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Nilai Siswa</button>
                                    <?php }?>
                                </div>
                                    <div class="data-tables datatable-dark">
										 <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
											<tr>
                                                <th>No</th>
												<th>Nis</th>
												<th>Nama Siswa</th>
												<th>Kelas</th>
                                                <th>PAI</th>
                                                <th>PKN</th>
                                                <th>BANDOI</th>
                                                <th>MTK</th>
                                                <th>IPA</th>
                                                <th>IPS</th>
                                                <th>B.Inggris</th>
                                                <th>Seni Budaya</th>
                                                <th>Penjas</th>
                                                <th>Prakarya</th>
                                                <?php if ($_SESSION['role']=='stock'){?>
                                                <th>Opsi</th>
                                                <?php }?>
											</tr></thead><tbody>
											<?php 
											$brgs=mysqli_query($conn,"SELECT * from nilai2 order by kode");
											while($p=mysqli_fetch_array($brgs)){
                                                $idb = $p['kode'];
												?>
												
												<tr>
													<td><?php echo $p['kode'] ?></td>
													<td><?php echo $p['nis_sis'] ?></td>
													<td><?php echo $p['nama_sis'] ?></td>
													<td><?php echo $p['kelas_sis'] ?></td>
													<td><?php echo $p['pai'] ?></td>
                                                    <td><?php echo $p['pkn'] ?></td>
													<td><?php echo $p['bandoi'] ?></td>
                                                    <td><?php echo $p['mtk'] ?></td>
                                                    <td><?php echo $p['ipa'] ?></td>
													<td><?php echo $p['ips'] ?></td>
                                                    <td><?php echo $p['binggris'] ?></td>
                                                    <td><?php echo $p['senibudaya'] ?></td>
													<td><?php echo $p['penjas'] ?></td>
                                                    <td><?php echo $p['prakarya'] ?></td>
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
                                                            <h4 class="modal-title">Edit Nilai
																	<?php echo $p['nama_sis']?> - <?php echo $p['kelas_sis']?>
                                                            </h4>
                                                            	<button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                          
                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                            
                                                            <label for="nama">NIS</label>
                                                            <input type="text" id="nis_sis" name="nis_sis" class="form-control" value="<?php echo $p['nis_sis'] ?>" disabled>

                                                            <label for="jenis">Nama Siswa</label>
                                                            <input type="text" id="nama_sis" name="nama_sis" class="form-control" value="<?php echo $p['nama_sis'] ?>" disabled >
                                                            <label for="jenis">Kelas</label>
                                                            <input type="text" id="kelas_sis" name="kelas_sis" class="form-control" value="<?php echo $p['kelas_sis'] ?>" disabled>
                                                            <label for="jenis">Nilai Pendidikan Agama Islam</label>
                                                            <input type="text" id="pai" name="pai" class="form-control" value="<?php echo $p['pai'] ?>" >
                                                            <label for="jenis">Nilai Pendidikan Kewarganegaraan</label>
                                                            <input type="text" id="pkn" name="pkn" class="form-control" value="<?php echo $p['pkn'] ?>" >
                                                            <label for="jenis">Nilai Bahasa Indonesia</label>
                                                            <input type="text" id="bandoi" name="bandoi" class="form-control" value="<?php echo $p['bandoi'] ?>" >
                                                            <label for="jenis">Nilai Matematika</label>
                                                            <input type="text" id="mtk" name="mtk" class="form-control" value="<?php echo $p['mtk'] ?>" >
                                                            <label for="jenis">Nilai Ilmu Pengetahuan Alam</label>
                                                            <input type="text" id="ipa" name="ipa" class="form-control" value="<?php echo $p['ipa'] ?>" >
                                                            <label for="jenis">Nilai Ilmu Pengetahuan Sosial</label>
                                                            <input type="text" id="ips" name="ips" class="form-control" value="<?php echo $p['ips'] ?>" >
                                                            <label for="jenis">Nilai Bahasa Inggris</label>
                                                            <input type="text" id="binggris" name="binggris" class="form-control" value="<?php echo $p['binggris'] ?>" >
                                                            <label for="jenis">Nilai Seni Budaya</label>
                                                            <input type="text" id="senibudaya" name="senibudaya" class="form-control" value="<?php echo $p['senibudaya'] ?>" >
                                                            <label for="jenis">Nilai Pendidikan Jasmani Dan Rohani</label>
                                                            <input type="text" id="penjas" name="penjas" class="form-control" value="<?php echo $p['penjas'] ?>" >
                                                            <label for="jenis">Prakarya</label>
                                                            <input type="text" id="prakarya" name="prakarya" class="form-control" value="<?php echo $p['prakarya'] ?>" >
                                                            <input type="hidden" name="kode" value="<?=$idb;?>">

                                                            
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



                                                    <!-- The Modal -->
                                                    <div class="modal fade" id="del<?=$idb;?>">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <form method="post">
                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Nilai <?php echo $p['nama_sis']?> - <?php echo $p['kelas_sis']?></h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            
                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus nilai dari siswa ini?
                                                            <input type="hidden" name="kode" value="<?=$idb;?>">
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
									<a href="exportstkbhn4.php" target="_blank" class="btn btn-info">Export Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
	
	<!-- modal input -->
			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Masukkan Data Kelas</h4>
						</div>
						<div class="modal-body">
							<form action="tmb_nil.php" method="post">
                            	<div class="form-group">
									<label>No</label>
									<input name="kode" type="text" class="form-control" placeholder="Masukkan Kode Nilai" required>
								</div>
								<div class="form-group">
									<label>NIS</label>
                                    <select name="nis_sis" class="custom-select form-control">
                               		<option selected>Pilih NIS</option>
									<?php
									$det=mysqli_query($conn,"select * from siswa2 order by nis_sis");
										while($d=mysqli_fetch_array($det)){
									?>
										<option value="<?php echo $d['nis_sis'] ?>"><?php echo $d['nis_sis'] ?> <?php echo $d['nama_sis'] ?></option>
										<?php
								}
								?>
									</select>
								</div>
								<div class="form-group">
									<label>Nama Siswa</label>
                                    <select name="nama_sis" class="custom-select form-control">
                               		<option selected>Pilih Nama</option>
									<?php
									$det=mysqli_query($conn,"select * from siswa2 order by nis_sis");
										while($d=mysqli_fetch_array($det)){
									?>
										<option value="<?php echo $d['nama_sis'] ?>"><?php echo $d['nis_sis'] ?> <?php echo $d['nama_sis'] ?></option>
										<?php
								}
								?>
									</select>
								</div>
								<div class="form-group">
									<label>Kelas Siswa</label>
                                     <select name="kelas_sis" class="custom-select form-control">
									<option selected>Pilih kelas</option>
									<?php
									$det=mysqli_query($conn,"select * from kelas order by id_kelas");
										while($d=mysqli_fetch_array($det)){
									?>
										<option value="<?php echo $d['nama_kelas'] ?>"><?php echo $d['nama_kelas'] ?> <?php echo $d['nama_walkes'] ?></option>
										<?php
								}
								?>
									</select>
								</div>
                                <div class="form-group">
									<label>Masukkan Nilai Pendidikan Agama Islam</label>
									<input name="pai" type="text" class="form-control" placeholder="Masukkan Nilai">
								</div>
                                <div class="form-group">
									<label>Masukkan Nilai Pendidikan Kewarganegaraan</label>
									<input name="pkn" type="text" class="form-control" placeholder="Masukkan Nilai">
								</div>
                                <div class="form-group">
									<label>Masukkan Nilai Bahasa Indonesia</label>
									<input name="bandoi" type="text" class="form-control" placeholder="Masukkan Nilai">
								</div>
                                <div class="form-group">
									<label>Masukkan Nilai Matematika</label>
									<input name="mtk" type="text" class="form-control" placeholder="Masukkan Nilai">
								</div>
                                <div class="form-group">
									<label>Masukkan Nilai Ilmu Pengetahuan Alam</label>
									<input name="ipa" type="text" class="form-control" placeholder="Masukkan Nilai">
								</div>
                                <div class="form-group">
									<label>Masukkan Nilai Ilmu Pengetahuan Sosial</label>
									<input name="ips" type="text" class="form-control" placeholder="Masukkan Nilai">
								</div>
                                <div class="form-group">
									<label>Masukkan Nilai Bahasa Inggris</label>
									<input name="binggris" type="text" class="form-control" placeholder="Masukkan Nilai">
								</div>
                                <div class="form-group">
									<label>Masukkan Nilai Seni Budaya</label>
									<input name="senibudaya" type="text" class="form-control" placeholder="Masukkan Nilai">
								</div>
                                <div class="form-group">
									<label>Masukkan Nilai Pendidikan Jasmani dan Rohani</label>
									<input name="penjas" type="text" class="form-control" placeholder="Masukkan Nilai">
								</div>
                                 <div class="form-group">
									<label>Masukkan Nilai Prakarya</label>
									<input name="prakarya" type="text" class="form-control" placeholder="Masukkan Nilai">
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
