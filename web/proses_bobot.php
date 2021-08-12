
<?php
session_start();
include('koneksi.php');
$username = $_SESSION['username'];
$query=mysql_query("SELECT * FROM kriteria ORDER BY id_kriteria LIMIT 4,4");
while($row=mysql_fetch_array($query))
{
$id=$row['id_kriteria'];
$a=$row['jumlah'];
$b=$a/4;
$upd = mysql_query("UPDATE `kriteria` SET bobot='$b' WHERE `id_kriteria`= '$id' ;");
}
header("Location: bobot_kriteria.php");
//proses konsistensi CR
$query=mysql_query("SELECT * FROM kriteria WHERE id_kriteria=1");
while($row=mysql_fetch_array($query)){$bipk=$row['bobot'];}
$query=mysql_query("SELECT * FROM kriteria WHERE id_kriteria=2");
while($row=mysql_fetch_array($query)){$bprestasi=$row['bobot'];}
$query=mysql_query("SELECT * FROM kriteria WHERE id_kriteria=3");
while($row=mysql_fetch_array($query)){$bskill=$row['bobot'];}
$query=mysql_query("SELECT * FROM kriteria WHERE id_kriteria=4");
while($row=mysql_fetch_array($query)){$bperilaku=$row['bobot'];}

//perkalian dengan prioritas
$query=mysql_query("SELECT * FROM kriteria ORDER BY id_kriteria LIMIT 0,4");
$id=9;
while($row=mysql_fetch_array($query))
{
$id=$id+1;
$e=$row['kriteria_ipk']*$bipk;
$f=$row['kriteria_prestasi']*$bprestasi;
$g=$row['kriteria_skill']*$skill;
$h=$row['kriteria_perilaku']*$bperilaku;
$upd = mysql_query("UPDATE `kriteria` SET kriteria_ipk='$e', kriteria_prestasi='$f',kriteria_skill='$g', kriteria_perilaku='$h' WHERE `id_kriteria`= $id ;");
}
//penjumlahan kolom
$query=mysql_query("SELECT * FROM kriteria ORDER BY id_kriteria LIMIT 10,4");
while($row=mysql_fetch_array($query))
{
$id=$row['id_kriteria'];
$jml=$row['kriteria_ipk']+$row['kriteria_prestasi']+$row['kriteria_skill']+$row['kriteria_perilaku'];
$upd = mysql_query("UPDATE `kriteria` SET jumlah='$jml' WHERE `id_kriteria`= '$id' ;");
}

//mencari Lamda
$query=mysql_query("SELECT * FROM kriteria WHERE id_kriteria=10");
while($row=mysql_fetch_array($query)){$lamda1=$row['jumlah']/$bipk;}
$upd = mysql_query("UPDATE `kriteria` SET bobot='$lamda1' WHERE `id_kriteria`=36 ;");
$query=mysql_query("SELECT * FROM kriteria WHERE id_kriteria=11");
while($row=mysql_fetch_array($query)){$lamda2=$row['jumlah']/$bkt;}
$upd = mysql_query("UPDATE `kriteria` SET bobot='$lamda2' WHERE `id_kriteria`=37 ;");
$query=mysql_query("SELECT * FROM kriteria WHERE id_kriteria=12");
while($row=mysql_fetch_array($query)){$lamda3=$row['jumlah']/$bpres;}
$upd = mysql_query("UPDATE `kriteria` SET bobot='$lamda3' WHERE `id_kriteria`=38 ;");
$query=mysql_query("SELECT * FROM kriteria WHERE id_kriteria=13");
while($row=mysql_fetch_array($query)){$lamda4=$row['jumlah']/$bbing;}
$upd = mysql_query("UPDATE `kriteria` SET bobot='$lamda4' WHERE `id_kriteria`=39 ;");
?>
