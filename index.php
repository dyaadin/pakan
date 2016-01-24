<!DOCTYPE html>
<html>
<head>
	<title>Kandungan Nutrisi Bahan Pakan</title>
</head>
<body>
	<h2>Kandungan Nutrisi</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a> / <a href="upload.php">Upload Data</a> </p>
	
	<h3>Data Bahan Pakan</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Asal Daerah</th>
			<th>Kandungan</th>
			<th>Dianalisis di</th>
			<th>Bahan Pakan</th>
			<th>Opsi</th>
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM bahan_pakan ORDER BY pakan_id ASC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['pakan_nama'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['pakan_daerah'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['pakan_kandungan'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['pakan_analisis'].'</td>';	//menampilkan data jurusan dari database
					echo '<td><a href="edit.php?id='.$data['pakan_id'].'">Edit</a> / <a href="hapus.php?id='.$data['pakan_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=pakan_id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>