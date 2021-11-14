<!DOCTYPE html>
	<html>
	<head>
		<title>Data Mahasiswa</title>
		<style>
			h5 {
				margin-left: 150px;
				font-size: 20px;
			}

			h6 {
				text-align: center;
				font-size: 16px;
			}

			img {

			}
		</style>
	</head>
	<body bgcolor="pink">
		<header>
			<br>
			<h1 align="center"> Daftar Beasiswa Mahasiswa</h1>
		</header>


		<br>	
		
		<h5>
			<nav>
			<?php if (isset($_GET['status'])) : ?>
				<p>
					<?php
					if ($_GET['status'] == 'sukses' ) {
						echo "Pendaftaran berhasil";
					} else {
						echo "Pendaftaran gagal!!";
					}
					?>

				</p>

			<?php endif; ?>
			
			<button><a href="home.php">Beranda</a></button> | <button><a href="daftar.php">Pendaftaran</a></button> | <button><a href="list.php">List Terdaftar</a></button> | <button><a href="index.php">Logout</a></button>
			</ul>		
		</nav>
		</h5>

		<h6>
			<p>
				Selamat datang di website resmi daftar beasiswa di Universitas Merdeka Malang. Untuk mengetahui informasi tentang daftar mahasiswa yang terdaftar di Universitas Merdeka Malang<br>
				silahkan pilih menu yang ada. Dan terdapat unutuk pilihan mendaftar dan mengedit informasi yang tidak sesuai di halaman web.
			</p>
		</h6>

		<center><img src="beasiswa.JPEG"></center>

	</body>
	</html>