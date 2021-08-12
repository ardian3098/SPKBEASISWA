
<?php
include 'koneksi.php';
$id=$_POST['id_kriteria'];
$a=$_POST['id_user'];
$n=$_POST['id_dtsiswa'];
$w=$_POST['thn_ajaran'];
$e=$_POST['nama'];
$b=$_POST['nilai'];
$query = mysql_query("INSERT INTO kriteria (`id_nilai`, `id_kriteria`, `id_user`, `id_dtsiswa`, `thn_ajaran`, `nama`, `nilai`) VALUES (NULL, '$id', '$a', '$n', '$w', '$e', '$b');");
echo $id.",";
echo $a.",";
echo $b.",";
header("Location: data_kriteria.php");
?> 