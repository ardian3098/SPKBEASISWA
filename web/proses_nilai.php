
<?php
session_start();
include 'koneksi.php';

$penilai = $_SESSION['id_user'];
$pelamar =$_POST['id_formulir'];

if ($_SESSION['role'] == "Penilai Prestasi") {
	$prestasi = $_POST['prestasi'];
//Cek Database
$cekdata = mysql_query("SELECT * FROM penilaian WHERE id_formulir = '$pelamar'");
$sdata = mysql_fetch_array($cekdata);
$scount = mysql_num_rows($cekdata);
	if ($scount > 0) {
		$send = mysql_query("UPDATE penilaian SET prestasi = '$prestasi' WHERE id_formulir = '$pelamar'");
	}else{
		$send = mysql_query("INSERT INTO penilaian(id_nilai, id_formulir, prestasi) VALUES (NULL,'$pelamar','$prestasi')");
	}
}

elseif ($_SESSION['role'] == "Penilai Skill") {
	$skill = $_POST['skill'];
//Cek Database
$cekdata = mysql_query("SELECT * FROM penilaian WHERE id_formulir = '$pelamar'");
$sdata = mysql_fetch_array($cekdata);
$scount = mysql_num_rows($cekdata);
	if ($scount > 0) {
		$send = mysql_query("UPDATE penilaian SET skill = '$skill' WHERE id_formulir = '$pelamar'");
	}else{
		$send = mysql_query("INSERT INTO penilaian(id_nilai, id_formulir, skill) VALUES (NULL,'$pelamar','$skill')");
	}
}

elseif($_SESSION['role'] == "Penilai Perilaku") {
	$perilaku = $_POST['perilaku'];
//Cek Database
$cekdata = mysql_query("SELECT * FROM penilaian WHERE id_formulir = '$pelamar'");
$sdata = mysql_fetch_array($cekdata);
$scount = mysql_num_rows($cekdata);
	if ($scount > 0) {
		$send = mysql_query("UPDATE penilaian SET perilaku = '$perilaku' WHERE id_formulir = '$pelamar'");
	}else{
		$send = mysql_query("INSERT INTO penilaian(id_nilai, id_formulir, perilaku) VALUES (NULL,'$pelamar','$perilaku')");
	}
}

header ("location:input_nilai.php");
?>