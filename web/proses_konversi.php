
<?php
session_start();
include('koneksi.php');
$username = $_SESSION['username'];
$query=mysql_query("SELECT * FROM formulir ORDER BY id_formulir");
while($row=mysql_fetch_array($query))
{
$a=$row['ipk'];
$b=$row['prestasi'];
$c=$row['skill'];
$d=$row['perilaku'];
$e=$row['id_formulir'];
if ($a>='2.75' and $a<='3.00'){$a='1';}
elseif ($a>='3.01' and $a<='3.50') {$a='3';}
else {$a='5';}
if ($b<'11.0'){$b='1';}
elseif ($b>='11.0' and $b<='20.0'){$b='3';}
else {$b='5';}
if ($c>='40.00' and $c<='60.00'){$c='1';}
elseif ($c>='60.01' and $c<='80.00'){$c='3';}
else {$c='5';}
if ($d>='40.00' and $d<='60.00'){$d='1';}
elseif ($d>='60.01' and $d<='80.00'){$d='3';}
else {$d='5';}
$upd=mysql_query("UPDATE `formulir` SET `ipk_conv`='$a',`prestasi_conv`='$b',`skill_conv`='$c',`perilaku_conv`='$d' WHERE `formulir`.`id_formulir`='$e'");
header("Location: konversi.php");
}
?>