<?php
session_start();
include 'koneksi.php';
$id=$_POST['id'];
$a=$_POST['thn_ajaran'];
$b=$_POST['nm_beasiswa'];
$c=$_POST['kuota'];
$query = mysql_query("UPDATE `beasiswa` SET thn_ajaran='$a', nm_beasiswa='$b', kuota='$c' WHERE `id_beasiswa` = '$id' ;");
echo $id.",";
echo $a.",";
echo $b.",";
echo $c.",";
echo "UPDATE `beasiswa` SET thn_ajaran='$a', nm_beasiswa='$b', kuota='$c' WHERE `id_beasiswa` = '$id' ;";
header("Location: data_beasiswa.php");
?> 