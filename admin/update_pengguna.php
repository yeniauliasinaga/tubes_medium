<?php 

//memeriksa inputan akun yang ingin dirubah
include '../koneksi.php'; //hubungan dengan file koneksi.php
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$level = $_POST['level'];
 
//melakukan perubahan data pada akun
mysqli_query($koneksi, "UPDATE akun SET nama='$nama', id='$id', username='$username', email='$email' , level='$level' WHERE id='$id'");
 
//kembali ke halaman pengguna
header("location:pengguna.php");
?>