<!DOCTYPE html>
<html>
<head>
	<title>Siple CRUD</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	<p><a href="Crud.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	<h3>Edit Data Mahasiswa</h3>
	<?php
		include ('koneksi.php');
		$id = $_GET['id'];
		$show = mysql_query("SELECT * FROM mahasiswa WHERE no = '$id'");
		if(mysql_num_rows($show) == 0){
			echo'<script>window.history.back()</script>';
		}else{
			$data = mysql_fetch_assoc($show);
		}
	?>
	<form action="delete-proses.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<table cellpadding="3" cellspacing="3">
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim" value="<?php echo $data['nim'];?>" required><br></td>

		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $data['nama'];?>" required><br></td>
		</tr>
		<tr>
			<td>Klik</td>
			<td></td>
			<td><input type="submit" name="hapus" value="hapus"></td>
		</tr>
		</table>
	</form>
</body>
</html>