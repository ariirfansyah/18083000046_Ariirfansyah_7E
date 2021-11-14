<?php 
session_start();
include("config.php");
 

$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
 
$data = mysqli_query($koneksi,"select * from mahasiswa where nama='$nama'");
$cek = mysqli_num_rows($data);
 
if($cek > 0){
    $_SESSION['nama'] = $nama;
    $_SESSION['login'] = "login";
    header("location:home.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>
