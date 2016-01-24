<!DOCTYPE html>
<html>
<head>
	<title>Kandungan Nutrisi Bahan Pakan</title>
</head>
<body>
	<h2>Kandungan Nutrisi</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit Bahan Pakan</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM bahan_pakan WHERE pakan_id='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Bahan Pakan</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $data['pakan_nama']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Asal Daerah</td>
				<td>:</td>
				<td><input type="text" name="daerah" value="<?php echo $data['pakan_daerah']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Kandungan</td>
				<td>:</td>
				<td><input type="text" name="kandungan" value="<?php echo $data['pakan_kandungan']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Dianalisis di</td>
				<td>:</td>
				<td><input type="text" name="analisis" value="<?php echo $data['pakan_analisis']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>