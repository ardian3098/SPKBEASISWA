<html>
<title>Laporan Data Pendaftar</title>
<body>
 
	<center>
 
		<h2>DATA DIRI CALON PENERIMA BEASISWA</h2>
		<h4>SMK KANISIUS BHARATA KARANGANYAR</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Nama</th>
			<th>NIS</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>No. Telp</th>
			</tr>
									<?php 
                                    $no = 1;
                                    $koneksi = mysqli_connect("localhost",'root',"","spkbeasiswa");                  
                                    if(isset($_GET['thn_ajaran'])){
                                        $thn = $_GET['thn_ajaran'];
                                        $sql = mysqli_query($koneksi,"select * from dt_siswa where thn_ajaran='$thn'");
                                    }else{
                                        $sql = mysqli_query($koneksi,"select * from dt_siswa");
                                    }
                                    
                                    while($data = mysqli_fetch_array($sql)){
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['nis']; ?></td>
                                        <td><?php echo $data['jk']; ?></td>
                                        <td><?php echo $data['alamat']; ?></td>
                                        <td><?php echo $data['no']; ?></td>
                                        
                                    </tr>
                                    <?php 
                                    }
                                    ?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>













