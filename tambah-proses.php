<?php

if (isset ($_POST ['tambah'])){

	include ('koneksi.php');
	
	$server = $_POST ['mlserver'];
	$hero = $_POST ['namahero'];
	$role = $_POST ['rolehero'];
	
$input = mysql_query ("INSERT INTO mobakokanalog VALUES (NULL, '$server', '$hero', '$role')") or die (mysql_error());

if ($input){
	echo 'Data Berhasil Di Tambahkan ';
	echo '<a href="tambah.php">Kembali</a>' ;
	}else{
		
	echo 'Gagal Di Tambahkan ';
	echo '<a href="tambah.php">Kembali</a>' ;
	}
	
	}else{
	
	echo '<script> windows.history.back() </script>' ; 
}
?>