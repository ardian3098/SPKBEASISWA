
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

$id=$_POST['id_user'];
$a=$_POST['nama'];
$b=$_POST['nik'];
$c=$_POST['jenis_kelamin'];
$d=$_POST['tempat_lahir'];
$e=$_POST['tgl_lahir'];
$f=$_POST['alamat'];
$g=$_POST['telp'];
$h=$_POST['email'];
$i=$_POST['ipk'];

$query = mysql_query("INSERT INTO formulir (`id_formulir`, `id_user`, `nama`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `telp`, `email`, `ipk`, `image`)
VALUES (NULL, '$id', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$nama' );");

echo $id.",";
echo $b.",";
echo $c.",";
echo $d.",";
echo $e.",";
echo $f.",";
echo $g.",";
echo $h.",";
echo $i.",";
header("Location: view_formulir.php");
}
?> 