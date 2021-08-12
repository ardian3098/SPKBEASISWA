<?php
session_start();
include 'koneksi.php';
$id=$_POST['id'];
$a=$_POST['thn_ajaran'];
$b=$_POST['id_kriteria'];
$c=$_POST['nilai'];

$query = mysql_query("UPDATE `kriteria` SET thn_ajaran='$a', id_kriteria='$b', nilai='$c' WHERE `id_nilai` = '$id' ;");
echo $id.",";
echo $a.",";
echo $b.",";
echo $c.",";

echo "UPDATE `kriteria` SET thn_ajaran='$a', id_kriteria='$b', nilai='$c' WHERE `id_nilai` = '$id' ;";
header("Location: data_kriteria.php");
?> 