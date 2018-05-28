<?php
	if(isset($_POST['simpan'])){
		include ('koneksi.php');
		$id = $_POST['id'];
		$server = $_POST['mlserver'];
		$hero = $_POST['namahero'];
		$role = $_POST['rolehero'];

		$UPDATE = mysql_query("UPDATE mobakokanalog set ml_server='$server' , nama_hero='$hero' , role_hero='$role' WHERE moba_id= '$id'");
		if ($UPDATE) {
			echo ' Data berhasil di UPDATE! ';
			echo ' <a href="Crud.php">kembali</a>';
		}else{
			echo ' Terjadi Error ';
		}
	}
?>