<html>
<title>Laporan Data Siswa</title>
<body>
 
	<center>
 
		<h2>DATA AKUN SISWA</h2>
		<h4>SMK KANISIUS BHARATA KARANGANYAR</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
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
                                    $gaji=800000;
                                    $rapor=95;
                                    $presensi=100;
                                    $kepribadian=5;
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
                                          <td><center><?php echo $data['gaji']/$gaji; ?></center></td>
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
                                    $c1=0.4;
                                    $c2=0.3;
                                    $c3=0.1;
                                    $c4=0.2;
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
                                          <td><center><?php echo ($data['gaji']/$gaji)*$c1; ?></center></td>
                                          <td><center><?php echo ($data['rapor']/$rapor)*$c2; ?></center></td>
                                          <td><center><?php echo ($data['presensi']/$presensi)*$c3; ?></center></td>
                                          <td><center><?php echo ($data['kepribadian']/$kepribadian)*$c4; ?></center></td>
                                          <td><center><?php echo (($data['gaji']/$gaji)*$c1)+(($data['rapor']/$rapor)*$c2)+(($data['presensi']/$presensi)*$c3)+(($data['kepribadian']/$kepribadian)*$c4); ?></center></td>
                                      </tr>
                                      <?php 
                                      }
                                      ?>
                                    </table>
                                    <br>
                                    <h2>Hasil Rangking</h2>
                                  <table border="1" cellspacing="0" width="600" height="200">
                                  <tr>
                                  <th><center>Nama Siswa</center></th>
                                  <th><center>Hasil Akhir</center></th>
                                  <th><center>Rangking</center></th>
                                    </tr>
                                    <?php
                                    $no=1;
                                    $gaji=800000;
                                    $rapor=95;
                                    $presensi=100;
                                    $kepribadian=5;
                                    $c1=0.4;
                                    $c2=0.3;
                                    $c3=0.1;
                                    $c4=0.2;
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
                                          <td><center><?php echo (($data['gaji']/$gaji)*$c1)+(($data['rapor']/$rapor)*$c2)+(($data['presensi']/$presensi)*$c3)+(($data['kepribadian']/$kepribadian)*$c4); ?></center></td>
                                          <td><center><?php echo $no++; ?></center></td>
                                      </tr>
                                      <?php 
                                      }
                                      ?>
                                    </table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>













