
<?php

include 'koneksi.php';
$ket1=$_POST['ket_kriteria'];
$a=$_POST['kriteria_ipk'];
$b=$_POST['kriteria_prestasi'];
$c=$_POST['kriteria_skill'];
$d=$_POST['kriteria_perilaku'];
$jumlah=$_POST['jumlah'];

$query = mysql_query("INSERT INTO kriteria (`id_kriteria`, `ket_kriteria`, `kriteria_ipk`, `kriteria_prestasi`, `kriteria_skill`, `kriteria_perilaku`,`jumlah`) 
VALUES (NULL, '$ket1', '$a', '$b', '$c', '$d', '$jumlah');");
echo $a.",";
echo $b.",";
echo $c.",";
echo $d.",";
echo $jumlah.",";





?>