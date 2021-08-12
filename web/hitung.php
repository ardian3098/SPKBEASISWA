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
                        <a href="hitung.php" class="waves-effect"><i class="fa fa-edit fa-fw" aria-hidden="true"></i>Kriteria Pendaftar</a>
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
                        <h4 class="page-title">Perhitungan Kriteria Siswa</h4> </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                                <div class="col-md-12 col-xs-20">
                                <div class="white-box">
                                <form method="get">
			                    <label>PILIH TAHUN PENGAJUAN</label>
			                    <select name="thn_ajaran" type="text" id="inputEmail" value="<?php echo $tahun ; ?>">
                                        <?php
                                    $kon = mysqli_connect("localhost",'root',"","spkbeasiswa");
                                    if (!$kon){
                                    die("Koneksi database gagal:".mysqli_connect_error());
                                    }
                                    $sql="select * from beasiswa";

                                    $hasil=mysqli_query($kon,$sql);
                                    $no=0;
                                    while ($data = mysqli_fetch_array($hasil)) {
                                    $no++;
                                ?>
                                    <option value="<?php echo $data['thn_ajaran'];?>"><?php echo $data['thn_ajaran'];?></option>
                                <?php 
                                    }
                                ?>                        
                                </select>
                                <input type="submit" value="TAMPIL">
                                </form>

                                  <h2>Data Kriteria</h2>
                                <table border="1" cellspacing="0" width="400" height="200">
                                <tr>
                                <th><center>Kode</center></th>
                                <th><center>Nama Kriteria</center></th>
                                <th><center>Jenis</center></th>
                                <th><center>Bobot</center></th>
                                </tr>

                                  <?php
                                  $no=1;
                                  $koneksi = mysqli_connect("localhost",'root',"","spkbeasiswa");                  
                                    if(isset($_GET['thn_ajaran'])){
                                        $thn = $_GET['thn_ajaran'];
                                        $sql = mysqli_query($koneksi,"select * from bobot where thn_ajaran='$thn'");
                                    }else{
                                        $sql = mysqli_query($koneksi,"select * from bobot");
                                    }
                                    
                                    while($data = mysqli_fetch_array($sql)){
                                    ?>
                                    <tr>
                                        <td><center>C<?php echo $no++; ?></center></td>
                                        <td><center><?php echo $data['nama']; ?></center></td>
                                        <td><center><?php echo $data['jenis']; ?></center></td>
                                        <td><center><?php echo $data['weight']; ?></center></td>
                                    </tr>
                                    <?php 
                                    }
                                    ?>
                                  </table>
                                  <br>

                                  <h2>Siswa Kriteria</h2>
                                    
                                  <table border="1" cellspacing="0" width="600" height="200">
                                <tr>
                                <th><center>Kode</center></th>
                                <th><center>Nama Siswa</center></th>
                                <th><center>C1</center></th>
                                <th><center>C2</center></th>
                                <th><center>C3</center></th>
                                <th><center>C4</center></th>
                                </tr>

                                  <?php
                                  $no=1;
                                  $koneksi = mysqli_connect("localhost",'root',"","spkbeasiswa");                  
                                    if(isset($_GET['thn_ajaran'])){
                                        $thn = $_GET['thn_ajaran'];
                                        $sql = mysqli_query($koneksi,"select * from dt_siswa where thn_ajaran='$thn'");
                                    }else{
                                        $sql = mysqli_query($koneksi,"select * from dt_siswa");
                                    }
                                    
                                    while($data = mysqli_fetch_array($sql)){
                                    ?>
                                    <tr>
                                        <td><center>S<?php echo $no++; ?></center></td>
                                        <td><center><?php echo $data['nama']; ?></center></td>
                                        <td><center><?php echo $data['gaji']; ?></center></td>
                                        <td><center><?php echo $data['rapor']; ?></center></td>
                                        <td><center><?php echo $data['presensi']; ?></center></td>
                                        <td><center><?php echo $data['kepribadian']; ?></center></td>
                                    </tr>
                                    <?php 
                                    }
                                    ?>
                                  </table>
                                    <br>
                                  <h2>Normalisasi</h2>
                                    
                                    <table border="1" cellspacing="0" width="600" height="200">
                                  <tr>
                                  <th><center>Kode</center></th>
                                  <th><center>C1</center></th>
                                  <th><center>C2</center></th>
                                  <th><center>C3</center></th>
                                  <th><center>C4</center></th>
                                  </tr>
  
                            
                                    <?php
                                    $no=1;
                                    $koneksi = mysqli_connect("localhost",'root',"","spkbeasiswa"); 
                                      if(isset($_GET['thn_ajaran'])){
                                          $thn = $_GET['thn_ajaran'];
                                          $sql = mysqli_query($koneksi,"select * from dt_siswa where thn_ajaran='$thn'");
                                      }else{
                                          $sql = mysqli_query($koneksi,"select * from dt_siswa");
                                      }
                                      if(isset($_GET['thn_ajaran'])){
                                        $thn = $_GET['thn_ajaran'];
                                      $query = "SELECT MIN(gaji) as minimal_gaji from dt_siswa where thn_ajaran='$thn'";
                                      }else{
                                        $query = "SELECT MIN(gaji) as minimal_gaji from dt_siswa";
                                      }
                                      
                                      $query = mysqli_query($koneksi, $query);

                                      while ($row = mysqli_fetch_assoc($query)){
                                          $gaji = $row['minimal_gaji'];
                                        }
                                        if(isset($_GET['thn_ajaran'])){
                                            $thn = $_GET['thn_ajaran'];
                                        $query = "SELECT MAX(rapor) as max_rapor from dt_siswa where thn_ajaran='$thn'";
                                        }else{
                                            $query = "SELECT MAX(rapor) as max_rapor from dt_siswa";
                                        }
                                        
                                        $query = mysqli_query($koneksi, $query);
  
                                        while ($row = mysqli_fetch_assoc($query)){
                                            $rapor = $row['max_rapor'];
                                        }
                                        if(isset($_GET['thn_ajaran'])){
                                            $thn = $_GET['thn_ajaran'];
                                        $query = "SELECT MAX(presensi) as max_presensi from dt_siswa where thn_ajaran='$thn'";
                                        }else{
                                            $query = "SELECT MAX(presensi) as max_presensi from dt_siswa";
                                        }
                                        
                                        $query = mysqli_query($koneksi, $query);
  
                                        while ($row = mysqli_fetch_assoc($query)){
                                            $presensi = $row['max_presensi'];
                                        }
                                        if(isset($_GET['thn_ajaran'])){
                                            $thn = $_GET['thn_ajaran'];
                                        $query = "SELECT MAX(kepribadian) as max_kepribadian from dt_siswa where thn_ajaran='$thn'";
                                        }else{
                                            $query = "SELECT MAX(kepribadian) as max_kepribadian from dt_siswa";
                                        }
                                        
                                        $query = mysqli_query($koneksi, $query);
  
                                        while ($row = mysqli_fetch_assoc($query)){
                                            $kepribadian = $row['max_kepribadian'];
                                        }

                                      while($data = mysqli_fetch_array($sql)){
                                      ?>
                                      <tr>
                                          <td><center>S<?php echo $no++; ?></center></td>
                                          <td><center><?php echo $gaji/$data['gaji']; ?></center></td>
                                          <td><center><?php echo $data['rapor']/$rapor; ?></center></td>
                                          <td><center><?php echo $data['presensi']/$presensi; ?></center></td>
                                          <td><center><?php echo $data['kepribadian']/$kepribadian; ?></center></td>
                                      </tr>
                                      <?php 
                                      }
                                      ?>
                                    </table>

                                    <br>
                                <h2>Pembobotan</h2>
                                  <table border="1" cellspacing="0" width="600" height="200">
                                  <tr>
                                  <th><center>Kode</center></th>
                                  <th><center>C1</center></th>
                                  <th><center>C2</center></th>
                                  <th><center>C3</center></th>
                                  <th><center>C4</center></th>
                                  <th><center>HASIL</center></th>
                                  </tr>
                                  <?php
                                    $no=1;
                                    $koneksi = mysqli_connect("localhost",'root',"","spkbeasiswa"); 
                                      if(isset($_GET['thn_ajaran'])){
                                          $thn = $_GET['thn_ajaran'];
                                          $sql = mysqli_query($koneksi,"select * from dt_siswa where thn_ajaran='$thn'");
                                      }else{
                                          $sql = mysqli_query($koneksi,"select * from dt_siswa");
                                      }
                                      if(isset($_GET['thn_ajaran'])){
                                        $thn = $_GET['thn_ajaran'];
                                        $ambilbobot = mysqli_query($koneksi,"select * from bobot where thn_ajaran='$thn'");
                                    }else{
                                        $ambilbobot = mysqli_query($koneksi,"select * from bobot");
                                    }
                                    if(isset($_GET['thn_ajaran'])){
                                        $thn = $_GET['thn_ajaran'];
                                       $query = "select weight as c1 from bobot where thn_ajaran='$thn' AND nama='Penghasilan Orang Tua'";
                                    }else{
                                        $query = "select weight as c1 from bobot where nama='Penghasilan Orang Tua'";
                                    }
                                       $query = mysqli_query($koneksi, $query);
  
                                        while ($row = mysqli_fetch_assoc($query)){
                                            $c1 = $row['c1'];
                                        }
                                        if(isset($_GET['thn_ajaran'])){
                                            $thn = $_GET['thn_ajaran'];
                                       $query = "select weight as c2 from bobot where thn_ajaran='$thn' AND nama='Nilai Rapor'";
                                        }else{
                                            $query = "select weight as c2 from bobot where nama='Nilai Rapor'";
                                        }
                                       $query = mysqli_query($koneksi, $query);
  
                                        while ($row = mysqli_fetch_assoc($query)){
                                            $c2 = $row['c2'];
                                        }

                                        if(isset($_GET['thn_ajaran'])){
                                            $thn = $_GET['thn_ajaran'];
                                       $query = "select weight as c3 from bobot where thn_ajaran='$thn' AND nama='Presensi'";
                                        }else{
                                            $query = "select weight as c3 from bobot where nama='Presensi'";
                                        }
                                       $query = mysqli_query($koneksi, $query);
  
                                        while ($row = mysqli_fetch_assoc($query)){
                                            $c3 = $row['c3'];
                                        }

                                        if(isset($_GET['thn_ajaran'])){
                                            $thn = $_GET['thn_ajaran'];
                                       $query = "select weight as c4 from bobot where thn_ajaran='$thn' AND nama='Kepribadian'";
                                        }else{
                                            $query = "select weight as c4 from bobot where nama='Kepribadian'";
                                        }
                                       $query = mysqli_query($koneksi, $query);
  
                                        while ($row = mysqli_fetch_assoc($query)){
                                            $c4 = $row['c4'];
                                        }
                                      while($data = mysqli_fetch_array($sql)){
                                          $a1=($gaji/$data['gaji'])*$c1;
                                          $a2=($data['rapor']/$rapor)*$c2;
                                          $a3=($data['presensi']/$presensi)*$c3;
                                          $a4=($data['kepribadian']/$kepribadian)*$c4;
                                          $total=(($gaji/$data['gaji'])*$c1)+(($data['rapor']/$rapor)*$c2)+(($data['presensi']/$presensi)*$c3)+(($data['kepribadian']/$kepribadian)*$c4);
                                      ?>
                                    
                                      <tr>
                                          <td><center>S<?php echo $no++; ?></center></td>
                                          <td><center><?php echo $a1; ?></center></td>
                                          <td><center><?php echo $a2; ?></center></td>
                                          <td><center><?php echo $a3; ?></center></td>
                                          <td><center><?php echo $a4; ?></center></td>
                                          <td><center><?php echo $total; ?></center></td>
                                      </tr>
                                      <?php 
                                      }
                                      ?>
                                    </table>
                                    <br>
                                    <li class="btn btn-info"><a class="nav-link" href="tambah.php">Tambah</a></li>
                                    <?php
                                    $thn='thn';
                                    $nama='nama';
                                    $total='total';
                                    //buat variabel dari setiap field name form produk
                                    $thn= mysqli_real_escape_string($koneksi, $_POST['thn']);    //varibel field nama
                                    $nama= mysqli_real_escape_string($koneksi, $_POST['nama']);    //varibel field stok
                                    $total= mysqli_real_escape_string($koneksi, $_POST['total']);  //varibel field deskripsi
                                    
                                    if(isset($_POST['simpan'])){
                                    $save=mysqli_query($conect, "INSERT INTO rangking (id_rang,thn_ajaran,nama,hasil)
                                        values ('','$thn','$nama','$total')");
                                        if($save){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
                                            echo "<script>alert('Data Produk Berhasil disimpan ke database');document.location='tambah.php'</script>";
                                        }else{  //jika simpan gagal maka muncul pesan
                                            echo "<script>alert('Proses simpan gagal, coba kembali');document.location='hitung.php'</script>";
                                        }
                                    }
                                    ?>                                    
























                                    <br>
                                    <!-- <h2>Hasil Rangking</h2>
                                  <table border="1" cellspacing="0" width="600" height="200">
                                  <tr>
                                  <th><center>Nama Siswa</center></th>
                                  <th><center>Hasil Akhir</center></th>
                                  <th><center>Rangking</center></th>
                                    </tr>
                                    <?php
                                    $no=1;
                                    $koneksi = mysqli_connect("localhost",'root',"","spkbeasiswa"); 
                                      if(isset($_GET['thn_ajaran'])){
                                          $thn = $_GET['thn_ajaran'];
                                          $sql = mysqli_query($koneksi,"select * from dt_siswa where thn_ajaran='$thn'");
                                      }else{
                                          $sql = mysqli_query($koneksi,"select * from dt_siswa");
                                      }
                                      
                                      while($data = mysqli_fetch_array($sql)){
                                      ?>
                                      <tr>
                                          <td><center><?php echo $data['nama']; ?></center></td>
                                          <td><center><?php echo (($gaji/$data['gaji'])*$c1)+(($data['rapor']/$rapor)*$c2)+(($data['presensi']/$presensi)*$c3)+(($data['kepribadian']/$kepribadian)*$c4); ?></center></td>
                                          <td><center><?php echo $no++; ?></center></td>
                                      </tr>
                                      <?php 
                                      }
                                      ?>
                                    </table>
                                    <br>
                                    <a class="btn btn-info" href="cetak_hitung.php" target="_blank">
								CETAK DATA LAPORAN</a>
                                  <br><br> -->
                                  <hr>
                                </div></div>


                                            


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
