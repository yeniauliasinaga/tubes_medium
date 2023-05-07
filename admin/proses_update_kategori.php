<?php 

//memeriksa inputan akun yang ingin dirubah
include '../koneksi.php';
$id = $_POST['id_kategori'];
$kategori = $_POST['kategori'];

mysqli_query($koneksi, "UPDATE kategori SET kategori='$kategori' WHERE id_kategori='$id'");
 
header("location:kategori.php");
?>