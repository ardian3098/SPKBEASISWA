<?php
session_start();
include 'koneksi.php';
$id=$_POST['id'];
$a=$_POST['thn_ajaran'];
$b=$_POST['kode'];
$c=$_POST['nama'];
$d=$_POST['jenis'];
$e=$_POST['bobot'];
$query = mysql_query("UPDATE `bobot` SET thn_ajaran='$a', kode='$b', nama='$c', jenis='$d', bobot='$e' WHERE `id_kriteria` = '$id' ;");
echo $id.",";
echo $a.",";
echo $b.",";
echo $c.",";
echo $d.",";
echo $e.",";
echo "UPDATE `bobot` SET thn_ajaran='$a', kode='$b', nama='$c', jenis='$d', bobot='$e' WHERE `id_kriteria` = '$id' ;";
header("Location: data_bobot.php");
?> 