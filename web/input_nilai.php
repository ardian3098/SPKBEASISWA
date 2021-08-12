<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if(!$_SESSION['admin']){
header("Location: login.php");
}

include 'koneksi.php';
$username = $_SESSION['username'];
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/logosurakarta.png">
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                     <a class="logo" href="penilaian.php">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-->
                            <img src="../plugins/images/SPK.png" alt="home" class="dark-logo" />
                            <!--This is light logo icon-->
                            <img src="../plugins/images/SPK.png" alt="home" class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                            <img src="../plugins/images/humasprotokol.png" alt="home" class="dark-logo" />
                            <!--This is light logo text-->
                            <img src="../plugins/images/humasprotokol.png" alt="home" class="light-logo" />
                        </span> 
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                   <!-- user dropdown starts -->
					<div class="btn btn-square btn-dark">
						<a class="btn dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i><?php echo "<font color=white>$username</font>" ?>
						<a>
						<ul class="dropdown-menu">
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
					<!-- user dropdown ends -->
				
                </ul>
            </div>
            <!-- /.navbar-header -->
        </nav>
		
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="penilaian.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Beranda</a>
                    </li>
                    <li>
                        <a href="input_nilai.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Input Nilai</a>
                    </li>
                </ul>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Input Nilai</h4> </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
   

				<div class="white-box">
					<h3 class="box-title">Tabel Penilaian</h3>
					<p>Periksa nama dan nilai pelamar di bawah tabel penilaian ini, jika belum terdapat nilai yang benar penilai dapat mensubmit nilai sesuai nama pelamar yang ada</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" method="post">

							<thead>
							<tr>
							<th><center>Nama</center></th>
							<th><center>IPK</center></th>
						
	
							<?php if ($_SESSION['role']=='Penilai Prestasi'){ echo "<th><center>Prestasi</center></th>";}
							elseif ($_SESSION['role']=='Penilai Skill'){ echo "<th><center>Skill</center></th>";}
							elseif ($_SESSION['role']=='Penilai Perilaku'){ echo "<th><center>Perilaku</center></th>";}?>
							</tr>
							</thead>
							
							<tbody>
								<?php
								$query=mysql_query("SELECT * FROM formulir ORDER BY id_user");
								while($row=mysql_fetch_array($query))
								{
								echo "
									<tr>
										<td><center>".$row['nama']."</center></td>";
										
										if ($_SESSION['role']=='Penilai Prestasi'){ echo "
										<td><center>".$row['ipk']."</center></td>
										<td><center>
										<a class='btn btn-success' href='nilai_prestasi.php?id=".$row['id_user']."&id_formulir=".$row['id_formulir']."'>
										Nilai Prestasi</a>
										</center></td>";}
										
										elseif ($_SESSION['role']=='Penilai Skill'){ echo "
										<td><center>".$row['ipk']."</center></td>
										<td><center>
										<a class='btn btn-success' href='nilai_skill.php?id=".$row['id_user']."&id_formulir=".$row['id_formulir']."'>
										Nilai Skill</a>
										</center></td>";}
										
										elseif ($_SESSION['role']=='Penilai Perilaku'){ echo "
										<td><center>".$row['ipk']."</center></td>
										<td><center>
										<a class='btn btn-success' href='nilai_perilaku.php?id=".$row['id_user']."&id_formulir=".$row['id_formulir']."'>
										Nilai Perilaku</a>
										</center></td>";}
										echo"
									</tr>
									";
									}
								?>	
							</tbody>
							
						</table>
					</div>
				</div>
				

			
				<div class="white-box">
					<h3 class="box-title">Nilai yang Sudah Tersubmit</h3>
                    <div class="table-responsive">
							<table class="table table-striped table-bordered bootstrap-datatable datatable" method="post">
								<thead>
									<tr>
									<th><center>Nama</center></th>
                                    <?php
									if ($_SESSION['role'] == "Penilai Prestasi") {
										echo "<th><center>Nilai Prestasi</center></th>";
										}
									elseif ($_SESSION['role'] == "Penilai Skill") {
										echo "<th><center>Nilai Skill</center></th>";
										}
									elseif($_SESSION['role'] == "Penilai Perilaku") {
										echo "<th><center>Nilai Perilaku</center></th>";
										}
                                    ?>

									</tr>
								</thead>
							
								<tbody>
								<?php
								$queryu = "SELECT * FROM penilaian";
								$exe = mysql_query($queryu);
								$cek = mysql_num_rows($exe);
								$no = 1;
								while($row = mysql_fetch_assoc($exe)){
								$id_nilai = $row['id_nilai'];
								$pelamar = $row['id_formulir'];
								$prestasi = $row['prestasi'];
								$skill = $row['skill'];
								$perilaku = $row['perilaku'];

								$cari=mysql_query("SELECT * FROM formulir WHERE id_formulir='$pelamar'");
								while($row=mysql_fetch_array($cari)){$nama=$row['nama'];
								$nama=$row['nama'];}
								
								echo "
									<tr>
									<td>".$nama."</td>
									";
									if ($_SESSION['role']=='Penilai Prestasi'){ echo "
									<td>".$prestasi."</td>
									";}
									elseif ($_SESSION['role']=='Penilai Skill'){ echo "
									<td>".$skill."</td>
									";}
									elseif ($_SESSION['role']=='Penilai Perilaku' and 'Nilai Perilaku'){ echo "
									<td>".$perilaku."</td>
									";}
									echo"
									<td>
										<center><a class='btn btn-danger' href='hapus_nilai.php?id=".$id_nilai."'>
										Hapus</a>
										</center>
									</td>
									";
									}
									?>
			
									</tr>
								</tbody>
							</table>
					</div>
				</div>
			
        </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2020 &copy; Humas dan Protokol Setda Kota Surakarta </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- <script src="js/dashboard1.js"></script> -->
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>
