<!DOCTYPE html>
<html>
<head>
	<title>MOBILE LEGEND</title>
</head>
<body>
	<h2>MOBILE LEGEND</h2>
	
	<p><a href="Crud.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Data Mobile Legend</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>User Id</th>
			<th>ML Server</th>
			<th>Nama Hero</th>
			<th>Role Hero</th>
		</tr>
		
		<?php
		
		include('koneksi.php');
		
		$query = mysql_query("SELECT * FROM mobakokanalog ORDER BY ml_server DESC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			
			$no = 1;
			while($data = mysql_fetch_assoc($query)){	

			//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
			//menampilkan row dengan data di database
			
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['ml_server'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['nama_hero'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['role_hero'].'</td>';
					 echo '<td><a href="edit.php?id='.$data['moba_id'].'">Edit</a>  <a href="delete-proses.php?id='.$data['moba_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	
					//menampilkan link edit dimana tiap link terdapat GET id -> ?id=mahasiswa_id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>