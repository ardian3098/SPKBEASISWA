
<?php
include 'koneksi.php';
$id= $_POST['id'];
$query = mysql_query("DELETE FROM `kriteria` WHERE id_user='$id' Order by `id_nilai`");
echo $id.",";
echo "DELETE FROM `kriteria` WHERE id_user='$id' order by `id_nilai`";
header('location:tampil_kriteria.php')
?> 