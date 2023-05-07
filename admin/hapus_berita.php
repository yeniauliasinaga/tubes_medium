<?php 
include "../koneksi.php"; 
$id_berita = $_GET['id_berita'];

$qu = mysqli_query( $koneksi, " SELECT gambar_berita FROM berita WHERE id_berita = $id_berita");
$row = mysqli_fetch_row($qu);

//hapus gambarnya yang berada di folder img/berita (diluar folder user)
unlink("../img/berita/$row[0]");

mysqli_query($koneksi," DELETE FROM berita WHERE id_berita ='$id_berita'");
 
header("location:pengelola_berita.php");
 
?>