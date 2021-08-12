
<?php
include 'koneksi.php';
$a=$_POST['thn_ajaran'];
$c=$_POST['nama'];
$d=$_POST['jenis'];
$e=$_POST['weight'];
$query = mysql_query("INSERT INTO bobot (`id_kriteria`, `thn_ajaran`, `nama`, `jenis`, `weight`) VALUES (NULL, '$a', '$c', '$d', '$e');");

echo $a.",";

echo $c.",";
echo $d.",";
echo $e.",";
header("Location: data_bobot.php");
?> 