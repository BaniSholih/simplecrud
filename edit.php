<!DOCTYPE html>
<html>
<head>
	<title>MOBA KOK BATMAN</title>
</head>
<body>
	<h2></h2>
	<p><a href="Crud.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	<h3>Edit Data Mobile Legend</h3>
	<?php
		include ('koneksi.php');
		$id = $_GET['id'];
		$show = mysql_query("SELECT * FROM mobakokanalog WHERE moba_id = '$id'");
		if($show === FALSE){
			die(mysql_error());
			echo'<script>window.history.back()</script>';
		}
		while ($data = mysql_fetch_assoc($show)){
	?>
	<form action="edit-proses.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<table cellpadding="3" cellspacing="3">
		<tr>
			<td>ML Server</td>
			<td>:</td>
			<td><input type="text" name="mlserver" value="<?php echo $data['ml_server'];?>" required><br></td>

		</tr>
		<tr>
			<td>Nama Hero</td>
			<td>:</td>
			<td><input type="text" name="namahero" value="<?php echo $data['nama_hero'];?>" required><br></td>
		</tr>
		<tr>
			<td>Role Hero</td>
			<td>:</td>
			<td><input type="text" name="rolehero" value="<?php echo $data['role_hero'];?>" required><br></td>
		</tr>
		<tr>
			<td>Klik</td>
			<td></td>
			<td><input type="submit" name="simpan" value="Simpan"></td>
		</tr>
		</table>
	</form>
</body>
</html>
<?php  
}  
?>