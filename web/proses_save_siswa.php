
<?php
include 'koneksi.php';
$a=$_POST['username'];
$b=$_POST['password'];
$c=$_POST['role'];
$query = mysql_query("INSERT INTO user (`id_user`, `username`, `password`, `role`) VALUES (NULL, '$a', '$b', '$c');");
echo $a.",";
echo $b.",";
echo $c.",";
header("Location: input_siswa.php");
?> 