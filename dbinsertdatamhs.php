<?php 
	/**
	memnambahkan data ke tabel mhs
	* buat koneksi
	* buat script sql untuk insert data ke tabel mhs NIM,NAMA,Jurusan,TGL lahir,JK, passcode
	* excute point 2
	* cek status
	* close connection
	*/
	if(isset($_POST["txNIM"])){
		include_once("dbkoneksi2.php");

		$nim = $_POST["txNIM"];
		$nama = $_POST["txNAMA"];
		$talag = $_POST["txTALAG"];
		$jl = $_POST["txJK"];
		$jur = $_POST["txJUR"];
		$passs = $_POST["txPASSS"];


		$sqlINSERT = "INSERT INTO mhs(NIM, NAMA, JURUSAN, JK, TGL lAHIR, PASSCODE) VALUE
		('".$nim."','".$nama."','".$jur."','".$jl."','".$talag."','".$passs."');";"
		echo "SQL:".$sql."<br>;

		$hsl = mysqli_query($cnn, $sqlINSERT);

		if($hsl){
			echo " Imsert data sukses<br>";
		}else{
			echo " Imsert data gagal<br>";
		}

		mysqli_close($cnn);
	}