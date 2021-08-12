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
                    <a class="logo" href="penilaian.php">
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
                        <a href="index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="data_beasiswa.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Data Beasiswa</a>
                    </li>
                    <li>
                        <a href="data_bobot.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Kriteria Beasiswa</a>
                    </li>
                    <li>
                        <a href="input_siswa.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>User</a>
                    </li>
                    <li>
                        <a href="tampil_pendaftar.php" class="waves-effect"><i class="fa fa-edit fa-fw" aria-hidden="true"></i>Data Pendaftar</a>
                    </li>
                    <li>
                        <a href="tampil_kriteria.php" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Kriteria Pendaftar</a>
                    </li>
                </ul>
            </div>
            
        </div>

        <form method="get">
			<label>PILIH TAHUN AJARAN</label>
			<select name="thn_ajaran" type="text" id="inputEmail" value="<?php echo $tahun ; ?>">
      <?php
            spl_autoload_register(function($class){
            require_once $class.'.php';
            });

            $saw = new Saw();
            ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">SPK Penerimaan Beasiswa</h4>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                <h2>Siswa Kriteria</h2>
                <?php
                $no=1;
                $kriteria = $saw->get_data_kriteria();
                $jml_kriteria = $kriteria->rowCount();
                ?>
                        <table border="1" cellspacing="0" height="200" width="600">

                        <tr>
                            <th rowspan="2"><center>Siswa</center></th>
                            <th colspan="<?php echo $jml_kriteria; ?>"><center>Kriteria</center></th>
                        </tr>
                        <?php
                        $kriteria = $saw->get_data_kriteria();
                        while ($data_kriteria = $kriteria->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <th><center>C<?php echo $data_kriteria['id_kriteria']; ?></center></th>

                        <?php } ?>
                        </tr>

                        <?php
                        $siswa = $saw->get_data_siswa();
                        while ($data_siswa = $siswa->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                            <tr>
                            <td><center><?php echo $data_siswa['nama']; ?></center></td>
                            <?php
                            $nilai = $saw->get_data_nilai_id($data_siswa['id_dtsiswa']);
                            while ($data_nilai = $nilai->fetch(PDO::FETCH_ASSOC)) { ?>
                                <td><center><?php echo $data_nilai['nilai']; ?></center></td>

                            <?php } ?>
                            </tr>

                        <?php } ?>

                        </table>

                        <br><br>
                        <td>
                            <option value="<?php echo $data['thn_ajaran'];?>"><?php echo $data['thn_ajaran'];?></option>
                          <?php 
                            
                          ?>
							</div>
						</div>                           
                        </select></div>
			            <input type="submit" value="TAMPIL">
		</form>

                    
											<center><a class='btn btn-info' href='kriteria_pendaftar.php'>
											Perhitungan Kriteria
											</a>
											</center>
										</td>
                        <hr>	
                        </div>
                        </div>
            
            <!-- /.container-fluid -->
            <footer class="footer text-center"> <?php echo date("Y"); ?> &copy; SMK KANISIUS BHARTA KARANGANYAR </footer>
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
