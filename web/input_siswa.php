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
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/img/logo.png">
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
                    <a class="logo" href="index.php">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-->
                            <img src="../plugins/img/logo.png" alt="home" class="dark-logo" />
                            <!--This is light logo icon-->
                            <img src="../plugins/img/logo.png" alt="home" class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                            <img src="../plugins/img/smk.png" alt="home" class="dark-logo" />
                            <!--This is light logo text-->
                            <img src="../plugins/img/smk.png" alt="home" class="light-logo" />
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
                <li style="padding: 90px 0 0;">
                        <a href="index.php" class="waves-effect"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="data_beasiswa.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Data Beasiswa</a>
                    </li>
                    <li>
                        <a href="data_bobot.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Kriteria Beasiswa</a>
                    </li>
                    <li>
                        <a href="input_siswa.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>User</a>
                    </li>
                    <li>
                        <a href="tampil_pendaftar.php" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Data Pendaftar</a>
                    </li>
                    <li>
                        <a href="tampil_kriteria.php" class="waves-effect"><i class="fa fa-edit fa-fw" aria-hidden="true"></i>Kriteria Pendaftar</a>
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
                        <h4 class="page-title">SPK PENERIMAAN BEASISWA</h4>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
        <div class="col-md-4 col-xs-12">
                        <div class="white-box">
						<p><center><b>TAMBAH SISWA PENDAFTAR BEASISWA</b></center></p>
						<br>
                            <form action="proses_save_siswa.php" method="post" class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12">Username</label>
                                    <div class="col-md-12">
                                        <input name="username" type="text" placeholder="Contoh: ardian"
                                            class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input name="password" type="password" value="" placeholder="********" class="form-control form-control-line">
                                    </div>
                                </div>  								
                                <div class="form-group">
                                    <label class="col-sm-12">Roles</label>
                                    <div class="col-sm-12">
                                        <input name="role" class="form-control form-control-line" Readonly value="Siswa">
                                    </div>
                                </div>
								
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Save User</button>
										<button type="reset" class="btn">Cancel</button>
                                    </div>
									<?php
									if (!empty($_POST)){
									$a=$_POST['username'];
									$b=$_POST['password'];
									$c=$_POST['role'];
									$query = mysql_query("INSERT INTO user (`id_user`, `username`, `password`, `role`) VALUES (NULL, '$a', '$b', '$c');");
									}
									?>

                                </div>
                            </form>
						</div>
					</div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
							<center><p><b>TABEL PENDAFTAR BEASISWA</b></p><center>			
					
                            <table class="table table-striped table-bordered bootstrap-datatable"">
                                    <thead>
                                        <tr>
											<th><center>Username<center></th>
											<th><center>Password<center></th>
											<th><center>Role<center></th>
											<th></th>
											<th></th>
                                        </tr>
										
					                </thead>
									
                                    <tbody>
									<?php
                                  	include("koneksi.php");
                                      error_reporting(0);
                                      $role=$_SESSION['role'];
                                      
                                      $query=mysql_query("SELECT * FROM user WHERE role='Siswa' ORDER BY id_user ");							
                                      while($row=mysql_fetch_array($query))
									{
									echo "
									<tr>
										<td>".$row['username']."</td>
										<td>".$row['password']."</td>
										<td>".$row['role']."</td>
		
										<td>
											<center><a class='btn btn-info' href='edit_siswa.php?id=".$row['username']."'>
											Edit
											</a>
											</center>
										</td>
										<td>
											<center><a class='btn btn-danger' href='hapus_siswa.php?id=".$row['username']."'>
											Hapus</a>
											</center>
										</td>
									</tr>
									";
									}
									?>	
									</tbody>							
                            </table>
                            <a class="btn btn-info" href="cetak_siswa.php" target="_blank">
								CETAK DATA USER</a>
						</div>	
					</div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> <?php echo date("Y"); ?> &copy; SMK KANISIUS BHARTA KARANGANYAR </footer>
		</div>
        <!-- /#page-wrapper -->
		</div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>