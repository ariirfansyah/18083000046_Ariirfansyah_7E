<?php include("config.php"); ?>

	<!DOCTYPE html>
	<html>
	<head>

		<title>Data Mahasiswa</title>
	</head>
	<body bgcolor="pink">
		<header>
			<style>
		    	body {
        		background: ;
    		}

    		h2 {
				margin-left: 150px;
				font-size: 20px;
			}

    		</style>


			<h1 align="center">Mahasiswa yang sudah mendaftar</h1>
		</header>

		
		
		<br>
<H2><button><a href="home.php">Beranda</a></button> | <button><a href="daftar.php">Pendaftaran</a></button> | <button><a href="list.php">List Terdaftar</a></button> | <button><a href="index.php">Logout</a></button></H2>
	
		<table border="1" align="center">
		<thead>
			<tr height="50">
				<th>No</th>
				<th width="100">Nama</th>
				<th width="100">Jurusan</th>
				<th width="100">Aksi</th>
			</tr>
		</thead>
		<tbody>
			
			<?php
			$sql = "SELECT * FROM mahasiswa";
			$query = mysqli_query($db, $sql);

			while($siswa = mysqli_fetch_array($query)){
				echo "<tr>";

				echo "<td>".$siswa['id']."</td>";
				echo "<td>".$siswa['nama']."</td>";
				echo "<td>".$siswa['jurusan']."</td>";
				
				echo "<td>";
				echo "<a href='edit.php?id=".$siswa['id']."'>Edit</a> | ";
				echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a> ";
				echo "</td>";

				echo "</tr>";

			}
			?>				

		</tbody>  
		</table>
		<br>
		<nav align="center">
			<a href="daftar.php">[+] tambah baru </a>
		</nav>
		<p align="center">Total: <?php echo mysqli_num_rows($query) ?></p>

		<center><img src="beasiswa.JPEG"></center>
	</body>
	</html>	

