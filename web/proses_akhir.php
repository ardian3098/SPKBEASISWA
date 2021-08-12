
<?php
session_start();
include('koneksi.php');
$username = $_SESSION['username'];
$query=mysql_query("SELECT * FROM penilaian ORDER BY id_nilai");
while($row=mysql_fetch_array($query))
{
$id=$row['id_formulir'];
$a=$row['bobot'];
$b=$row['nilai'];
$v=$b/($a+$b);
$upd=mysql_query("UPDATE `penilaian` SET `akhir`='$v' WHERE id_nilai='$id'");
header("Location: hasil_akhir.php");
}
?>