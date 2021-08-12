
<?php
include 'koneksi.php';
$id = $_POST['id'];
$query = mysql_query("DELETE FROM `user` WHERE username='$id'");
echo $id.",";
echo "DELETE FROM `user` WHERE username='$id'";
header("Location: input_siswa.php");
?> 