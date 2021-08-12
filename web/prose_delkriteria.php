
<?php
include 'koneksi.php';
$id = $_POST['id'];
$query = mysql_query("DELETE FROM `kriteria` WHERE id_kriteria='$id'");
echo $id.",";
echo "DELETE FROM `kriteria` WHERE id_kriteria='$id'";
header("Location: data_kriteria.php");
?>
