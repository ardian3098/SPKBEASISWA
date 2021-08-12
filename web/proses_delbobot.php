
<?php
include 'koneksi.php';
$id = $_POST['id'];
$query = mysql_query("DELETE FROM `bobot` WHERE kode='$id'");
echo $id.",";
echo "DELETE FROM `bobot` WHERE kode='$id'";
header("Location: data_bobot.php");
?>
