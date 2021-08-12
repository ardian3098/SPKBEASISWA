
<?php
session_start();
include 'koneksi.php';
$id=$_POST['id'];
$a=$_POST['username'];
$b=$_POST['password'];
$c=$_POST['role'];
$query = mysql_query("UPDATE `user` SET username='$a', password='$b', role='$c' WHERE `id_user` = '$id' ;");
echo $id.",";
echo $a.",";
echo $b.",";
echo $c.",";
echo "UPDATE `user` SET username='$a', password='$b', role='$c' WHERE `id_user` = '$id' ;";
header("Location: input_siswa.php");
?> 