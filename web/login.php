<?php
session_start();
include 'koneksi.php';
define('INCLUDE_CHECK',1);

// Jika user ingin login
if(isset($_POST['login'])) {
$nama=htmlentities($_POST['username']);
$pass=htmlentities($_POST['password']);
$result = mysql_query("SELECT * FROM user WHERE username = '$nama' and password='$pass'");
$user_data = mysql_fetch_array($result);
$data_ada = mysql_num_rows($result);
if ($data_ada == 1){
$_SESSION['admin'] = true;
$_SESSION['username'] = $user_data['username'];
$_SESSION['id_user'] = $user_data['id_user'];
$_SESSION['role'] = $user_data['role'];
// Login sukses
header("location: autentikasi.php");
}
else{
// Login gagal
?>
<script language="javascript">
alert("Maaf, Username atau Password Anda salah!!");
document.location="login.php";
</script>
<?php
}
}
?>

<?php
$no_visible_elements=true; ?>


<html>
<head>
	<title>SPK Seleksi Beasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>SISTEM INFORMASI PENDUKUNG KEPUTUSAN SELEKSI BEASISWA YAYASAN KANISIUS <br> SMK KANISIUS BHARATA KARANGANYAR</h1>

<div class="kotak_login">
	<form action="" method="post">
		<label>Username</label><br>
		<input autofocus type="text" name="username" id="username" class="form_login" placeholder="Username .." required="required"/>
		
		<label>Password</label><br>
		<input type="password" name="password" id="password" class="form_login" placeholder="Password .." required="required"/>
		
		<label class="remember" for="remember"><input type="checkbox" id="remember"/>Remember me</label><br><br>
		
		<input type="submit" name="login" class="tombol_login" value="LOGIN">
	</form>
</div>

</body>
</html>
