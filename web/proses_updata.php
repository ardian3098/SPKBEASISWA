
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

$a=$_POST['nama'];
$b=$_POST['nis'];
$c=$_POST['kelas'];
$d=$_POST['jk'];
$e=$_POST['alamat'];
$f=$_POST['no'];
$g=$_POST['email'];


$query = mysql_query("INSERT INTO dt_siswa (`id_dtsiswa`,`nama`, `nis`, `kelas`, `jk`, `alamat`, `no`, `email`, `image`)
VALUES (NULL,'$a', '$b', '$c', '$d', '$e', '$f', '$g', '$nama' );");

echo $b.",";
echo $c.",";
echo $d.",";
echo $e.",";
echo $f.",";
echo $g.",";

header("Location: view_siswa.php");
}
?> 