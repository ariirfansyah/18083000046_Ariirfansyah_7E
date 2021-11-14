<!DOCTYPE html>
	<html>
	<head>
		<title>Data Mahasiswa</title>
		<style>
			p {
				text-align: 	center;	
			}

			h2 {
				margin-left: 150px;
				font-size: 20px;
			}
		</style>
	</head>
	<body bgcolor="pink">
		<header>
			<h1 align="center"> Pendaftaran Beasiswa</h1>
		</header>

<H2><button><a href="home.php">Beranda</a></button> | <button><a href="daftar.php">Pendaftaran</a></button> | <button><a href="list.php">List Terdaftar</a></button> | <button><a href="index.php">Logout</a></button></H2>

		<form action="pendaftaran.php" method="POST">
			<br>

			<fieldset>
				
			<p>
				<label for="nama"> Nama: </label>
				<input type="text" name="nama" placeholder=" Isikan nama lengkap" /> 
			</p>
			<p>
				<label for="alamat"> Jurusan: </label>
				<select name='jurusan'>
					<option value='FTI'>FTI</option>
					<option value='Fisip'>Fisip</option>
					<option value='Psikologi'>Psikologi</option>
					<option value='Teknik'>Teknik</option>
					<option value='Hukum'>Hukum</option>
	 			 </select> 
			</p>
			<p>
				<input type="submit" value="daftar" name="daftar" />  <button><a href="home.php">Kembali</a></button>
			</p>	
			</fieldset>
		</form>
		<center><img src="beasiswa.JPEG"></center>
	</body>
	</html>