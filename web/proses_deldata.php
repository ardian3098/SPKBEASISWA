
<?php
include 'koneksi.php';
$id = $_POST['id'];
$query = mysql_query("DELETE FROM `dt_siswa` WHERE nama='$id'");
echo $id.",";
echo "DELETE FROM `dt_siswa` WHERE nama='$id'";
header("Location: view_siswa.php");
?> 