
<?php
session_start();
include('koneksi.php');
/*$username = $_SESSION['username'];
$query=mysql_query("SELECT * FROM penilaian ORDER BY id_nilai");
while($row=mysql_fetch_array($query))
{
$id=$row['id_formulir'];
$a=$row['bobot'];
$b=$row['nilai'];
$v=$b/($a+$b);
$upd=mysql_query("UPDATE `penilaian` SET `akhir`='$v' WHERE id_nilai='$id'");
header("Location: hasil_perbandingan.php");
}*/


	function cek($b, $a, $n){
		$id_kriteria = $_POST['id_kriteria'];
		$qw=mysql_query("SELECT count(*) as total FROM analisa_pelamar where id_formulir_pertama='$b' and id_formulir_kedua='$a' and id_kriteria='$id_kriteria'");
	    while($rw=mysql_fetch_array($qw))
	    {
	    	$total = $rw['total'];
	    }
	    if ($total == 0) {
	    	$query=mysql_query("INSERT INTO `analisa_pelamar` (`id_analisa`, `id_formulir_pertama`, `id_formulir_kedua`, `id_kriteria`, `nilai`, `hasil`) VALUES (NULL, '".$b."', '".$a."', '".$id_kriteria."', '".(1/$n)."', '0');");
	    }

	}

if (isset($_POST['nilai'])) {
	$id_formulirnye = explode(",", $_POST['id_formulirnye']);
	$id_kriteria = $_POST['id_kriteria'];
	$a = $_POST['id_formulir_pertama'];
	$nilai = $_POST['nilai'];
	$b = $_POST['id_formulir_kedua'];
	$total = count($a);
	$q=mysql_query("DELETE FROM `analisa_pelamar` WHERE `analisa_pelamar`.`id_kriteria` = '$id_kriteria'");
	$w=mysql_query("DELETE FROM `analisa_pelamar` WHERE `analisa_pelamar`.`id_kriteria` = '0'");

	foreach($id_formulirnye as $id){
		$q=mysql_query("INSERT INTO `analisa_pelamar` (`id_analisa`, `id_formulir_pertama`, `id_formulir_kedua`, `id_kriteria`, `nilai`, `hasil`) VALUES (NULL, '".$id."', '".$id."', '".$id_kriteria."', '1', '0');");
	}

	for ($i=0; $i <= $total; ) { 
		$query=mysql_query("INSERT INTO `analisa_pelamar` (`id_analisa`, `id_formulir_pertama`, `id_formulir_kedua`, `id_kriteria`, `nilai`, `hasil`) VALUES (NULL, '".$a[$i]."', '".$b[$i]."', '".$id_kriteria."', '".$nilai[$i]."', '0');");
		cek($b[$i], $a[$i], $nilai[$i]);

		$i++;
	}

	header("Location: hasil_perbandingan.php?id=$id_kriteria");
	//echo json_encode($a[0]);
	//echo json_encode($nilai);
	//echo json_encode($b);
}else{
	echo "Mohon maaf mohon kembali ke halaman utama";
}




?>