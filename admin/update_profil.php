<?php 

//memeriksa inputan akun yang ingin dirubah
include '../koneksi.php'; //hubungan dengan file koneksi.php
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$password = md5($_POST['password']); 
//melakukan perubahan data pada akun
mysqli_query($koneksi, "UPDATE akun SET nama='$nama', id='$id', password='$password', username='$username', email='$email' WHERE id='$id'");

//mengupdate session karena baru selesai edit profil
$_SESSION['username'] = $user;
$_SESSION['nama'] = $nama;
$_SESSION['email'] = $email;

//kembali ke halaman pengguna
$query = mysqli_query($koneksi, "SELECT * FROM akun where id = '$id'");
while ($level = mysqli_fetch_array($query)){


if($level['level'] == 'admin'){
    header("location:dashboard_admin.php");
}
elseif($level['level'] == 'pengguna'){
    header("location:user.php");
}
}
?>