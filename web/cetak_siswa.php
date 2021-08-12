<html>
<title>Laporan Data Siswa</title>
<body>
 
	<center>
 
		<h2>DATA AKUN SISWA</h2>
		<h4>SMK KANISIUS BHARATA KARANGANYAR</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Role</th>
			</tr>
            <?php 
		$no = 1;
		$query=mysql_query("SELECT * FROM user");
			while($row=mysql_fetch_array($query))
			{
				echo "
				<tr>
					<td>".$no++."</td>
					<td>".$row['username']."</td>
					<td>".$row['password']."</td>
					<td>".$row['role']."</td>
				";
			}
		?>
	</table>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>













