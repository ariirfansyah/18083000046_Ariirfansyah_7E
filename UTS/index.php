<!DOCTYPE html>

<html>

<head>
	<style media="screen">

  #backlogin {
    background: white;
    width: 35%;
    height: 350px;
    border: 1px solid #d2d2d2;
    border-radius: 5px;
    margin-top: 150px;
  }

  @font-face {
    src: url('font/Product Sans Regular.ttf');
    font-family: Product Sans;
  }

  @font-face {
    src: url('font/OpenSans-Light.ttf');
    font-family: OpenSans-Light;
  }

  #backlogin form {
    margin-top: 15px;
    float: left;
    padding: 5px;
  }

  #backlogin .inputa {
    width: 90%;
    margin-top: 1px;
    height: 50px;
    border: 0px;
    border-bottom: 1px solid #6a82fb;
    font-size: 16px;
    font-family: OpenSans-Light;
    background: transparent;
  }

  #backlogin .wed {
    margin-top: 40px;
    width: 45%;
    height: 40px;
    background: #6a82fb;
    border: none;
    color: white;
    font-family: product sans;
    font-size: 20px;
    border-radius: 5px;
  }

  #backlogin h1 {
    text-align: center;
    padding: 5px;
    color: #6a82fb;
    font-family: Product Sans;
  }

  #backlogin hr {
    width: 50%;
    height: 4px;
    border: none;
    background: #6a82fb;
  }
</style>

  <meta charset="utf-8">
  <title>Form Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body bgcolor="pink">


<?php 
	if(isset($_GET['login'])){
		if($_GET['login'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['login'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['login'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>



  <center>
    <div id="backlogin">
      <h1>FORM LOGIN</h1>
      <hr>
      <form id="login" action="home.php" method="post"> 
        <input type="text" name="nama" placeholder="Masukan Nama"> 
        <select name='jurusan'>
		<option value='FTI'>FTI</option>
		<option value='Fisip'>Fisip</option>
		<option value='Psikologi'>Psikologi</option>
		<option value='Teknik'>Teknik</option>
		<option value='Hukum'>Hukum</option>
	  </select> 
        <input type="submit" class="wed" name="" value="Submit"> <input type="reset" class="wed" name="" value="Reset"> 
     </form>
    </div>
  </center>
</body>
  
</html>