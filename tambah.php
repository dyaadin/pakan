<!DOCTYPE html>
<html>
<head>
	<title>Kandungan Nutrisi Bahan Pakan</title>
</head>
<body>
	<h2>Kandungan Nutrisi</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Bahan Pakan</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Bahan Pakan</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Asal Daerah</td>
				<td>:</td>
				<td><input type="text" name="daerah" required></td>
			</tr>
			<tr>
				<td>Kandungan Nutrisi</td>
				<td>:</td>
				<td><input type="text" name="kandungan" required></td>
				</td>
			</tr>
			<tr>
				<td>Dianalisis di</td>
				<td>:</td>
				<td><input type="text" name="analisis" required></td>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>