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
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg"
                            href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <!-- user dropdown starts -->
					<div class="btn btn-square btn-dark">
						<a class="btn dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i><?php echo "<font color=white>$username</font>"?>
						<a>
						<ul class="dropdown-menu">
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
					<!-- user dropdown ends -->
					
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
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
                        <a href="index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Beranda</a>
                    </li>
                    <li>
                        <a href="user_list.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>User</a>
                    </li>
                    <li>
                        <a href="view_pelamar.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Data Pelamar</a>
                    </li>
                    <li>
                        <a href="input_kriteria.php" class="waves-effect"><i class="fa fa-edit fa-fw" aria-hidden="true"></i>Analisa Kriteria</a>
                    </li>
                    <li>
                        <a href="bobot_kriteria.php" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Hasil Kriteria</a>
                    </li>
                    <li>
                        <a href="data_awal.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Data Nilai</a>
                    </li>
					 <li>
                        <a href="konversi.php" class="waves-effect"><i class="fa fa-edit fa-fw" aria-hidden="true"></i>Analisa Alternatif</a>
                    </li>
                    <li>
                        <a href="hasil_akhir.php" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Hasil Akhir</a>
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
                        <h4 class="page-title">Analisa Kriteria</h4>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
						
						
						<?php $query=mysql_query("SELECT * FROM kriteria where id_kriteria='1'");
						while($row=mysql_fetch_array($query))
						{
							$ipk_ipk = $row['kriteria_ipk'];
							$ipk_prestasi = $row['kriteria_prestasi'];
							$ipk_skill = $row['kriteria_skill'];
							$ipk_perilaku = $row['kriteria_perilaku'];
						} ?>

						<?php $query=mysql_query("SELECT * FROM kriteria where id_kriteria='2'");
						while($row=mysql_fetch_array($query))
						{
							$prestasi_ipk = $row['kriteria_ipk'];
							$prestasi_prestasi = $row['kriteria_prestasi'];
							$prestasi_skill = $row['kriteria_skill'];
							$prestasi_perilaku = $row['kriteria_perilaku'];
						} ?>

						<?php $query=mysql_query("SELECT * FROM kriteria where id_kriteria='3'");
						while($row=mysql_fetch_array($query))
						{
							$skill_ipk = $row['kriteria_ipk'];
							$skill_prestasi = $row['kriteria_prestasi'];
							$skill_skill = $row['kriteria_skill'];
							$skill_perilaku = $row['kriteria_perilaku'];
						} ?>

						<?php $query=mysql_query("SELECT * FROM kriteria where id_kriteria='4'");
						while($row=mysql_fetch_array($query))
						{
							$perilaku_ipk = $row['kriteria_ipk'];
							$perilaku_prestasi = $row['kriteria_prestasi'];
							$perilaku_skill = $row['kriteria_skill'];
							$perilaku_perilaku = $row['kriteria_perilaku'];
						} ?>
						
						<div id="artikel-analisa"><h3 class="box-title">Input Kriteria</h3>
						

	
						
							<table class="table table-striped table-bordered bootstrap-datatable">
								<form method="post" action="">
									<thead>
										<tr>
											<th><center>Kriteria</center></th>
											<th><center>IPK</center></th>
											<th><center>Prestasi</center></th>
											<th><center>Skill</center></th>
											<th><center>Perilaku</center></th>
										</tr>
									</thead>

									<tbody>
									<tr>
										<input name="id1" type="hidden" value="1">
										<input name="ket1" type="hidden" value="IPK">
										<td>IPK</td>
										<input name="ipk1" type="hidden" value="1">
										<td><input name="ipk_ipk" class="span12" type="text" value="1" readonly=""></td>

										<td><select class="span12" name="ipk_prestasi" onchange="pres1.Input.value += 'terpilih'">
										<option>--Pilih Nilai--</option>
										<option value="1" <?php if(round($ipk_prestasi) == 1){echo 'selected';} ?> >sama penting (1)</option>
										<option value="2" <?php if(round($ipk_prestasi) == 2){echo 'selected';} ?> >cukup penting (2)</option>
										<option value="3" <?php if(round($ipk_prestasi) == 3){echo 'selected';} ?> >penting (3)</option>
										<option value="4" <?php if(round($ipk_prestasi) == 4){echo 'selected';} ?> >sedikit lebih penting (4)</option>
										<option value="5" <?php if(round($ipk_prestasi) == 5){echo 'selected';} ?>>sangat penting (5)</option>
										<option value="6" <?php if(round($ipk_prestasi) == 6){echo 'selected';} ?>>sedikit lebih penting (6)</option>
										<option value="7" <?php if(round($ipk_prestasi) == 7){echo 'selected';} ?>>lebih penting (7)</option>
										<option value="8" <?php if(round($ipk_prestasi) == 8){echo 'selected';} ?>>sangat penting (8)</option>
										<option value="9" <?php if(round($ipk_prestasi) == 9){echo 'selected';} ?>>penting sekali (9)</option>
										</select></td>
										<td><select class="span12" name="ipk_skill">
										<option>--Pilih Nilai--</option>
										<option value="1" <?php if(round($ipk_skill) == 1){echo 'selected';} ?>>sama penting (1)</option>
										<option value="2" <?php if(round($ipk_skill) == 2){echo 'selected';} ?>>cukup penting (2)</option>
										<option value="3" <?php if(round($ipk_skill) == 3){echo 'selected';} ?>>penting (3)</option>
										<option value="4" <?php if(round($ipk_skill) == 4){echo 'selected';} ?>>sedikit lebih penting (4)</option>
										<option value="5" <?php if(round($ipk_skill) == 5){echo 'selected';} ?>>sangat penting (5)</option>
										<option value="6" <?php if(round($ipk_skill) == 6){echo 'selected';} ?>>sedikit lebih penting (6)</option>
										<option value="7" <?php if(round($ipk_skill) == 7){echo 'selected';} ?>>lebih penting (7)</option>
										<option value="8" <?php if(round($ipk_skill) == 8){echo 'selected';} ?>>sangat penting (8)</option>
										<option value="9" <?php if(round($ipk_skill) == 9){echo 'selected';} ?>>penting sekali (9)</option>
										</select></td>
										<td><select class="span12" name="ipk_perilaku">
										<option>--Pilih Nilai--</option>
										<option value="1" <?php if(round($ipk_perilaku) == 1){echo 'selected';} ?>>sama penting (1)</option>
										<option value="2" <?php if(round($ipk_perilaku) == 2){echo 'selected';} ?>>cukup penting (2)</option>
										<option value="3" <?php if(round($ipk_perilaku) == 3){echo 'selected';} ?>>penting (3)</option>
										<option value="4" <?php if(round($ipk_perilaku) == 4){echo 'selected';} ?>>sedikit lebih penting (4)</option>
										<option value="5" <?php if(round($ipk_perilaku) == 5){echo 'selected';} ?>>sangat penting (5)</option>
										<option value="6" <?php if(round($ipk_perilaku) == 6){echo 'selected';} ?>>sedikit lebih penting (6)</option>
										<option value="7" <?php if(round($ipk_perilaku) == 7){echo 'selected';} ?>>lebih penting (7)</option>
										<option value="8" <?php if(round($ipk_perilaku) == 8){echo 'selected';} ?>>sangat penting (8)</option>
										<option value="9" <?php if(round($ipk_perilaku) == 9){echo 'selected';} ?>>penting sekali (9)</option>
										</select></td>
									</tr>

									<tr>
										<input name="id2" type="hidden" value="2">
										<input name="ket2" type="hidden" value="Prestasi">
										<td>Prestasi</td>
										<input name="pres1" type="hidden" value="">
										<td> <?php echo $prestasi_ipk; ?> </td>
										
										<td><input name="prestasi_prestasi" class="span12" type="text" value="1" readonly=""></td>
										<td><select class="span12" name="prestasi_skill">
										<option>--Pilih Nilai a--</option>
										<option value="1" <?php if(round($prestasi_skill) == 1){echo 'selected';} ?> >sama penting (1)</option>
										<option value="2" <?php if(round($prestasi_skill) == 2){echo 'selected';} ?>>cukup penting (2)</option>
										<option value="3" <?php if(round($prestasi_skill) == 3){echo 'selected';} ?>>penting (3)</option>
										<option value="4" <?php if(round($prestasi_skill) == 4){echo 'selected';} ?>>sedikit lebih penting (4)</option>
										<option value="5" <?php if(round($prestasi_skill) == 5){echo 'selected';} ?>>sangat penting (5)</option>
										<option value="6" <?php if(round($prestasi_skill) == 6){echo 'selected';} ?>>sedikit lebih penting (6)</option>
										<option value="7" <?php if(round($prestasi_skill) == 7){echo 'selected';} ?>>lebih penting (7)</option>
										<option value="8" <?php if(round($prestasi_skill) == 8){echo 'selected';} ?>>sangat penting (8)</option>
										<option value="9" <?php if(round($prestasi_skill) == 9){echo 'selected';} ?>>penting sekali (9)</option>
										</select></td>
										<td><select class="span12" name="prestasi_perilaku">
										<option>--Pilih Nilai--</option>
										<option value="1" <?php if(round($prestasi_perilaku) == 1){echo 'selected';} ?>>sama penting (1)</option>
										<option value="2" <?php if(round($prestasi_perilaku) == 2){echo 'selected';} ?>>cukup penting (2)</option>
										<option value="3" <?php if(round($prestasi_perilaku) == 3){echo 'selected';} ?>>penting (3)</option>
										<option value="4" <?php if(round($prestasi_perilaku) == 4){echo 'selected';} ?>>sedikit lebih penting (4)</option>
										<option value="5" <?php if(round($prestasi_perilaku) == 5){echo 'selected';} ?>>sangat penting (5)</option>
										<option value="6" <?php if(round($prestasi_perilaku) == 6){echo 'selected';} ?>>sedikit lebih penting (6)</option>
										<option value="7" <?php if(round($prestasi_perilaku) == 7){echo 'selected';} ?>>lebih penting (7)</option>
										<option value="8" <?php if(round($prestasi_perilaku) == 8){echo 'selected';} ?>>sangat penting (8)</option>
										<option value="9" <?php if(round($prestasi_perilaku) == 9){echo 'selected';} ?>>penting sekali (9)</option>
										</select></td>
									</tr>

									<tr>
										<input name="id3" type="hidden" value="3">
										<input name="ket3" type="hidden" value="Skill">
										<td>Skill</td>
										<td><?php echo $skill_ipk; ?></td>
										<td><?php echo $skill_prestasi; ?></td>
										<input name="skill3" type="hidden" value="1">
										<td><input name="skill_skill" class="span12" type="text" value="1" readonly=""></td>
										<td><select class="span12" name="skill_perilaku">
										<option>--Pilih Nilai--</option>
										<option value="1" <?php if(round($skill_perilaku) == 1){echo 'selected';} ?> >sama penting (1)</option>
										<option value="2" <?php if(round($skill_perilaku) == 2){echo 'selected';} ?>>cukup penting (2)</option>
										<option value="3" <?php if(round($skill_perilaku) == 3){echo 'selected';} ?>>penting (3)</option>
										<option value="4" <?php if(round($skill_perilaku) == 4){echo 'selected';} ?>>sedikit lebih penting (4)</option>
										<option value="5" <?php if(round($skill_perilaku) == 5){echo 'selected';} ?>>sangat penting (5)</option>
										<option value="6" <?php if(round($skill_perilaku) == 6){echo 'selected';} ?>>sedikit lebih penting (6)</option>
										<option value="7" <?php if(round($skill_perilaku) == 7){echo 'selected';} ?>>lebih penting (7)</option>
										<option value="8" <?php if(round($skill_perilaku) == 8){echo 'selected';} ?>>sangat penting (8)</option>
										<option value="9" <?php if(round($skill_perilaku) == 9){echo 'selected';} ?>>penting sekali (9)</option>
										</select></td>
										</tr>

									<tr>
										<input name="id4" type="hidden" value="4">
										<input name="ket4" type="hidden" value="Perilaku">
										<td>Perilaku</td>
										<td><?php echo $perilaku_ipk; ?></td>
										<td><?php echo $perilaku_prestasi; ?></td>
										<td><?php echo $perilaku_skill; ?></td>
										
										<td><input name="perilaku_perilaku" class="span12" type="text" value="1" readonly=""></td>
									</tr>
									<?php 
									
									$ipk = $ipk_ipk + $prestasi_ipk + $skill_ipk + $perilaku_ipk;
									$prestasi = $ipk_prestasi + $prestasi_prestasi + $skill_prestasi + $perilaku_prestasi;
									$skill = $ipk_skill + $prestasi_skill + $skill_skill + $perilaku_skill;
									$perilaku = $ipk_perilaku + $prestasi_perilaku + $skill_perilaku + $perilaku_perilaku;


									?>
									<tr>
										<td><b>Jumlah</b></td>
										<td>
											<b><?php echo $ipk; ?></b>
										</td>
										<td>
											<b><?php echo $prestasi; ?></b>
										</td>
										<td>
											<b><?php echo $skill; ?></b>
										</td>
										<td>
											<b><?php echo $perilaku; ?></b>
										</td>

									</tr>
									
									</tbody>

							</table>
					
							
								<div class="col-sm-13">
									<button type="submit" class="btn btn-primary">Submit Kriteria</button>
								</div>
								<?php
								if (!empty($_POST)){
								$ipk_ipk = $_POST['ipk_ipk'];
								$ipk_prestasi = $_POST['ipk_prestasi'];
								$ipk_skill = $_POST['ipk_skill'];
								$ipk_perilaku = $_POST['ipk_perilaku'];

								$prestasi_ipk = intval($ipk_ipk)/intval($ipk_prestasi);
								$prestasi_prestasi = $_POST['prestasi_prestasi'];
								$prestasi_skill = $_POST['prestasi_skill'];
								$prestasi_perilaku = $_POST['prestasi_perilaku'];

								$skill_ipk = intval($ipk_ipk)/intval($ipk_skill);
								$skill_prestasi = intval($prestasi_prestasi)/intval($prestasi_skill);
								$skill_skill = $_POST['skill_skill'];
								$skill_perilaku = $_POST['skill_perilaku'];


								$perilaku_ipk = intval($ipk_ipk)/intval($ipk_perilaku);
								$perilaku_prestasi = intval($prestasi_prestasi)/intval($prestasi_perilaku);
								$perilaku_skill = intval($skill_skill)/intval($skill_perilaku);
								$perilaku_perilaku = $_POST['perilaku_perilaku'];

								

								$bobot_ipk = ( $ipk_ipk + $ipk_prestasi + $ipk_skill + $ipk_perilaku ) / 4;
									$bobot_prestasi = ( $prestasi_ipk + $prestasi_prestasi + $prestasi_skill + $prestasi_perilaku ) / 4;
									$bobot_skill = ( $skill_ipk + $skill_prestasi + $skill_skill + $skill_perilaku ) / 4;
									$bobot_perilaku = ( $perilaku_ipk + $perilaku_prestasi + $perilaku_skill + $perilaku_perilaku ) / 4;

								//input ipk
								$query = mysql_query("UPDATE `kriteria` SET  `kriteria_ipk` = '$ipk_ipk', `kriteria_prestasi` = '$ipk_prestasi', `kriteria_skill` = '$ipk_skill', `kriteria_perilaku` = '$ipk_perilaku', `jumlah` = '$ipk', `bobot` = '$bobot_ipk' WHERE `kriteria`.`id_kriteria` = 1;");	
								//input prestasi
								$query = mysql_query("UPDATE `kriteria` SET  `kriteria_ipk` = '$prestasi_ipk', `kriteria_prestasi` = '$prestasi_prestasi', `kriteria_skill` = '$prestasi_skill', `kriteria_perilaku` = '$prestasi_perilaku', `jumlah` = '$prestasi', `bobot` = '$bobot_prestasi' WHERE `kriteria`.`id_kriteria` = 2;");

								$query = mysql_query("UPDATE `kriteria` SET  `kriteria_ipk` = '$skill_ipk', `kriteria_prestasi` = '$skill_prestasi', `kriteria_skill` = '$skill_skill', `kriteria_perilaku` = '$skill_perilaku', `jumlah` = '$skill', `bobot` = '$bobot_skill' WHERE `kriteria`.`id_kriteria` = 3;");

								$query = mysql_query("UPDATE `kriteria` SET  `kriteria_ipk` = '$perilaku_ipk', `kriteria_prestasi` = '$perilaku_prestasi', `kriteria_skill` = '$perilaku_skill', `kriteria_perilaku` = '$perilaku_perilaku', `jumlah` = '$perilaku', `bobot` = '$bobot_perilaku' WHERE `kriteria`.`id_kriteria` = 4;");

								echo "<script>alert('Update data kriteria berhasil');
								location.href = 'input_kriteria.php';</script>";

								}				
								?>
							</div>
							
								
						</div>
					</div> 
										
					
					<div class="col-sm-7">
						<div class="white-box">
							<h3 class="box-title"><center>Tabel Perbandingan</center></h3>
							<div class="box-content">	
								<table class="table table-striped table-bordered bootstrap-datatable">
									<thead>
									<tr>
									<th><center>Nilai</center></th>
									<th><center>Keterangan</center></th>
									</tr>
									</thead>
									
									<tbody>
									<tr>
									<td><center>1</center></td>
									<td>jika kedua elemen sama pentingnya</td>
									</tr>
									<tr>
									<td><center>3</center></td>
									<td>jika elemen yang satu sedikit lebih penting daripada elemen yang lain</td>
									</tr>
									<tr>
									<td><center>5</center></td>
									<td>jika elemen yang satu lebih penting daripada elemen yang lain</td>
									</tr>
									<tr>
									<td><center>7</center></td>
									<td>jika elemen satu jelas lebih mutlak penting daripada elemen yang lain</td>
									</tr>
									<tr>
									<td><center>9</center></td>
									<td>jika elemen satu jelas mutlak penting daripada elemen yang lain</td>
									</tr>
									<tr>
									<td><center>2,4,6,8</center></td>
									<td>nilai-nilai antara dua nilai pertimbangan-pertimbangan yang berdekatan</td>
									</tr>
									</tbody>
								</table>
								
							</div>
						</div>
					</div>
					
					
					<div class="col-sm-5">
						<div class="white-box">
							<h3 class="box-title"><center>Perhatian</center></h3>
							<div class="box-content">	
								<p>Contoh Isi Perbandingan antar kriteria :</p>
								<ul>
								<li>Misalnya perbandingan <b>IPK</b> dengan <b>Perilaku</b> adalah 3, artinya <b>IPK</b> lebih penting daripada <b>Perilaku</b>.</li>
								<li>Maka untuk perbandingan sebaliknya, yaitu <b>Perilaku</b> dengan <b>IPK</b> akan tersubmit otomatis nilai perbandingannya</li>
								</ul>
							</div>
							
						</div>
					</div>
					
				</div>  
			</div>
        <footer class="footer text-center"> 2020 &copy; Humas dan Protokol Setda Kota Surakarta </footer>
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