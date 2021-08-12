
<?php
include 'koneksi.php';
$a=$_POST['thn_ajaran'];

$query = mysql_query("INSERT INTO beasiswa (`thn_ajaran`) VALUES ('$a');");
echo $a.",";

header("Location: data_beasiswa.php");
?>