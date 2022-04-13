<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah data mahasiswa</title>
</head>
<body>

	<h3>tambah data mahasiswa</h3>
	<form action="dbinsertdatamhs.php" method="POST">

		NIM
		<div>
		<input type="text" name="txNIM">
		</div>
		NAMA
		<div>
		<input type="text" name="txNAMA">
		</div>
		jenis kelamin
		<div>
			<select name="txJK">
				<option value="L">laki laki</option>
				<option value="P">perempuan</option>
			</select>
		</div>
		TGL Lahir
		<div>
			<input type="date" name="txTALAG">
		</div>
		Jurusan
		<div>
		<select name="txJUR">
			<option value="MTI">MTI</option>
			<option value="KAB">KAB</option>
		</select> 
		</div>
		Passcode
		<div>
			<input type="password" name="txPASS">
		</div>

		<div>
			<button type="submit">Simpan Data</button>
		</div>
	</form>
	
</body>
</html>