
<?php
session_start();
$roles = $_SESSION['role'];
if ($roles =='Admin') {header("location: kepala_sekolah.php");}
elseif ($roles == 'Operator') {header("location: index.php");}
elseif ($roles == 'Siswa') {header("location: siswa.php");}
else {header("location: login.php");}
?>