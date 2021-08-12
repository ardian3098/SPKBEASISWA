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
                     <a class="logo" href="formulir.php">
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
                        <a href="siswa.php" class="waves-effect"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="input_data.php" class="waves-effect"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>Isi Biodata</a>
                    </li>
                    
                    <li>
                        <a href="view_siswa.php" class="waves-effect"><i class="fa fa-book fa-fw" aria-hidden="true"></i>Lihat Biodata</a>
                    </li>
                    <li>
                        <a href="data_kriteria.php" class="waves-effect"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>Input Kriteria</a>
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
                        <h4 class="page-title">Formulir Kriteria Beasiswa</h4> </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
               
                <div class="row">
        <div class="col-md-4 col-xs-12">
                        <div class="white-box">
						<p><center><b>Input Nilai Kriteria Siswa</b></center></p>
						<br>
                            <form action="proses_save_kriteria.php" method="post" class="form-horizontal form-material">
                            <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'];?>">
                            <input type="hidden" name="nama" value="<?php echo $_SESSION['username'];?>">

                            <div class="form-group">
                                    <label class="col-md-12">ID Siswa</label>
                                    <div class="col-md-12">
                                        <select type="hidden" name="id_dtsiswa" type="text" placeholder=""
                                            class="form-control form-control-line">
                                            <?php
                                            $x=$_SESSION['id_user'];
                            $kon = mysqli_connect("localhost",'root',"","spkbeasiswa");
                            if (!$kon){
                               die("Koneksi database gagal:".mysqli_connect_error());
                            }
                            $sql="select * from dt_siswa where id_user='$x' ";

                            $hasil=mysqli_query($kon,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                           ?>
                            <option type="hidden" value="<?php echo $data['id_dtsiswa'];?>"><?php echo $data['id_dtsiswa'];?></option>
                          
                          <?php 
                            }
                          ?>                
                        </select></div>
                                </div>


                            <div class="form-group">
                                    <label class="col-md-12">Tahun Ajaran</label>
                                    <div class="col-md-12">
                                        <select name="thn_ajaran" type="text" placeholder=""
                                            class="form-control form-control-line">
                                            <?php           
                            $kon = mysqli_connect("localhost",'root',"","spkbeasiswa");
                            if (!$kon){
                               die("Koneksi database gagal:".mysqli_connect_error());
                            }
                            $sql="select * from beasiswa ";

                            $hasil=mysqli_query($kon,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                           ?>
                            <option value="<?php echo $data['thn_ajaran'];?>"><?php echo $data['thn_ajaran'];?></option>
                          
                          <?php 
                            }
                          ?>                
                        </select></div>
                                </div>

                            <div class="form-group">
                                    <label class="col-md-12">Nama Kriteria</label>
                                    <div class="col-md-12">
                                        <select name="id_kriteria" type="text" placeholder=""
                                            class="form-control form-control-line">
                                            <?php
                            $thn=$_SESSION['thn_ajaran'];
                            $x=$_SESSION['id_user'];
                            $kon = mysqli_connect("localhost",'root',"","spkbeasiswa");
                            if (!$kon){
                               die("Koneksi database gagal:".mysqli_connect_error());
                            }
                            $sql="select * from bobot order by thn_ajaran='$thn' ";

                            $hasil=mysqli_query($kon,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                           ?>
                            <option value="<?php echo $data['id_kriteria'];?>"><?php echo $data['nama'];?></option>
                          
                          <?php 
                            }
                          ?>                
                        </select></div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-12">Nilai Kriteria</label>
                                    <div class="col-md-12">
                                        <input name="nilai" type="text" placeholder=" "
                                            class="form-control form-control-line"> </div>
                                </div> 
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Save Data</button>
										<button type="reset" class="btn">Cancel</button>
                                    </div>
									

                                </div>
                            </form>
						</div>
					</div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
							<center><p><b>TABEL DATA KRITERIA SISWA</b></p><center>			
					
                            <table class="table table-striped table-bordered bootstrap-datatable">
                                    <thead>
                                        <tr>
											<th><center>ID Kriteria<center></th>
											<th><center>Nilai Kriteria<center></th>
                                            
											<th></th>
											<th></th>
                                        </tr>
										
					                </thead>
									
                                    <tbody>
									<?php
                                    include("koneksi.php");
									error_reporting(0);
									$x=$_SESSION['id_user'];

									$query=mysql_query("SELECT * FROM kriteria WHERE id_user='$x' ORDER BY id_kriteria");
									while($row=mysql_fetch_array($query))
									{
									echo "
									<tr>
										<td>".$row['id_kriteria']."</td>
										<td>".$row['nilai']."</td>
										
										<td>
											<center><a class='btn btn-info' href='edit_kriteria.php?id=".$row['id_kriteria']."'>
											Edit
											</a>
											</center>
										</td>
										<td>
											<center><a class='btn btn-danger' href='hapus_kriteria.php?id=".$row['id_kriteria']."'>
											Hapus</a>
											</center>
										</td>
									</tr>
									";
									}
									?>	
									</tbody>							
                            </table>
						</div>	
					</div>	

                    <div class="col-md-8 col-xs-12">
					<div class="white-box">
						<h3 class="box-title"><center><b>PERHATIAN</b></center></h3>
                    <tr>
                    <td>Nilai Presensi</td>
                    <td>90-100%=A</td> </tr<tr>
					</div>
				</div>	
				
		   
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
	
	<script type="text/javascript">$( '.datepicker' ).datepicker({
	dateFormat: 'yy-mm-dd'
	});</script>
</body>

</html>


