<?php 
// koneksi database
include "../koneksi.php";
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_pengguna'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM tb_pengguna WHERE id_pengguna ='$id'");

echo"<script>
    alert('Akun berhasil dihapus!!');
     </script>"; 
 
// mengalihkan halaman kembali ke index.php

header("location:pengguna.php");
 
?>