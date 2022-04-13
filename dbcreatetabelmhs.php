<?php 
	/**
	membuat tabel
	1. koneksi server database dan membuka database
	2. script sql create tabel
	* tabel:mhs
	*field: NIM varchar(8),NAMA varchar(30).jurusan varchar(20),JK enum ,TGLLAHIR date,PASSCODE
	* execute script point 2
	* cek status
	* close connection
	*/

	include_once("dbkoneksi2.php");
	$sql = "CREATE TABLE mhs(
			NIM varchar(8) PRIMARY KEY,
			NAMA varchar(30),
			jurusan varchar(20),
			JK varchar(1),
			TGLLAHIR date,
			PASSCODE varchar(18)
		);";

	$hsl = mysqli_query($cnn,$sql);

	if($hsl){
		echo"pembuatan tabel <strong>mhs</strong> sukses<br>";
	}else{
		echo"pembuatan tabel <strong>mhs</strong> gagal<br>";
	}
	mysqli_close($cnn);