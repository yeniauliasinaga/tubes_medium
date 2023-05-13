<?php
require '../koneksi.php';

//fungsi untuk memasukkan data artikel ke dalam database
function tambahArtikel($judul, $isi, $gambar, $tgl_artikel, $tag) {
    global $koneksi;

    //mengambil nama file gambar
    $nama_file = $_FILES['gambar']['name'];
    //mengambil ukuran file gambar
    $ukuran_file = $_FILES['gambar']['size'];
    //mengambil lokasi sementara file gambar
    $tmp_file = $_FILES['gambar']['tmp_name'];
    //mengambil tipe file gambar
    $tipe_file = $_FILES['gambar']['type'];

    //set path untuk menyimpan file gambar
    $path = "../assets/img/berita".$nama_file;

    //memeriksa apakah file gambar berhasil diunggah
    if(move_uploaded_file($tmp_file, $path)) {
        //membuat query untuk memasukkan data artikel ke dalam tabel artikel
        $query = "INSERT INTO artikel (judul, isi, gambar, tgl_artikel, tag) VALUES ('$judul', '$isi', '$nama_file', '$tgl_artikel', '$tag')";

        //menjalankan query
        if(mysqli_query($koneksi, $query)) {
            //jika query berhasil dijalankan, redirect ke halaman index
            header("Location: ../dashboard-login.php");
        } else {
            //jika query gagal dijalankan, tampilkan pesan error
            echo "Error: ".$query."<br>".mysqli_error($koneksi);
        }
    } else {
        //jika file gagal diunggah, tampilkan pesan error
        echo "Error: File ".$nama_file." gagal diunggah.";
    }
}

//jika tombol tambah di-submit, jalankan fungsi tambahArtikel()
if(isset($_POST['btn_tambah'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $gambar = $_FILES['gambar'];
    $tgl_artikel = date('Y-m-d');
    $tag = $_POST['tag'];
    tambahArtikel($judul, $isi, $gambar, $tgl_artikel, $tag);
}
?>
