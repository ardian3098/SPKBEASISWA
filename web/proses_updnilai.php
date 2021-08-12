
<?php
include 'koneksi.php';
$penilai = $_SESSION['id_user'];
$pelamar = $_POST['id_prestasi'];
$nilai = $_POST['nilai'];

//Cek Database
$cekdata = mysql_query("SELECT * FROM prestasi WHERE id_prestasi = '$pelamar'");
$sdata = mysql_fetch_array($cekdata);
$scount = mysql_num_rows($cekdata);
	if ($scount > 0) {
		$send = mysql_query("UPDATE prestasi SET nilai = '$nilai' WHERE id_prestasi = '$pelamar'");
	}else{
		$send = mysql_query("INSERT INTO prestasi(id_nilai, id_formulir, prestasi) VALUES (NULL,'$pelamar','$prestasi')");
	}

header("Location: input_nilai.php");
?> 