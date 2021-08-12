
<?php
include 'koneksi.php';
$id = $_POST['id'];
$query = mysql_query("DELETE FROM `beasiswa` WHERE thn_ajaran='$id'");
echo $id.",";
echo "DELETE FROM `beasiswa` WHERE thn_ajaran='$id'";
header("Location: data_beasiswa.php");
?>
