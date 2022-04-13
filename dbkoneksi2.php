<?php
	/**
	* Membuat koneksi
	* 1. menyiapkan lokasi server,user name dan password
	* 2. test koneksi
	*/

	include_once("konfigurasi.php");

	//echo DBHOST;

	$cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die ("koneksi ke DBMS Mysql gagal<br>");
	echo "koneksi ke DBMS Mysql sukses<br>";