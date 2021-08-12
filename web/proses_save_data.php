
<?php
include 'koneksi.php';
      $ekstensi_diperbolehkan = array('png','jpg');
      $nama = $_FILES['file']['name'];
      $x = explode('.', $nama);
      $ekstensi = strtolower(end($x));
      $ukuran = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];  

  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
          move_uploaded_file($file_tmp, 'file/'.$nama);

          $ekstensi_diperbolehkan1 = array('png','jpg');
          $nama1 = $_FILES['file1']['name'];
          $x1 = explode('.', $nama1);
          $ekstensi1 = strtolower(end($x1));
          $ukuran1 = $_FILES['file1']['size'];
          $file_tmp1 = $_FILES['file1']['tmp_name'];  
    
      if(in_array($ekstensi1, $ekstensi_diperbolehkan1) === true){
              move_uploaded_file($file_tmp1, 'file1/'.$nama1);

$id=$_POST['id_user'];
$a=$_POST['nama'];
$b=$_POST['nis'];
$d=$_POST['jk'];
$e=$_POST['alamat'];
$f=$_POST['no'];
$g=$_POST['thn_ajaran'];
$h=$_POST['gaji'];
$i=$_POST['rapor'];
$j=$_POST['presensi'];
$k=$_POST['kepribadian'];



$query = mysql_query("INSERT INTO dt_siswa (`id_dtsiswa`, `id_user`, `nama`, `nis`, `jk`, `alamat`, `no`, `thn_ajaran`, `gaji`, `rapor`, `presensi`, `kepribadian`, `scanr`, `scans`)
VALUES (NULL, '$id', '$a', '$b', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$nama', '$nama1');");

echo $id.",";
echo $b.",";

echo $d.",";
echo $e.",";
echo $f.",";
echo $g.",";
echo $h.",";
echo $i.",";
echo $j.",";
echo $k.",";
echo $nama.",";
echo $nama1.",";
header("Location: input_data.php");
}
  }
?> 