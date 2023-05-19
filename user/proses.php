<?php
include '../koneksi.php';

        function create_article($artikel)
        {
        global $koneksi;
        $id_pengguna = $_SESSION['id_pengguna'];
        $kategori = $_POST['id_tag'];
        $judul = htmlspecialchars($artikel["judul"]);
        $isi = htmlspecialchars($artikel["isi"]);
        $tanggal = $_POST['tgl_artikel'];

        // ambil data file
        $namaFile = $_FILES['gambar']['name'];
        $namaSementara = $_FILES['gambar']['tmp_name'];

        // tentukan lokasi file akan dipindahkan
        $dirUpload = "../assets/berita/";

        // pindahkan file
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

        $insert = "INSERT INTO tb_artikel (id_pengguna, id_tag, judul, isi, gambar, tgl_artikel)
        VALUES ('$id_pengguna', '$kategori', '$judul', '$isi', '$namaFile', '$tanggal')";

        mysqli_query($koneksi, $insert);

        return mysqli_affected_rows($koneksi);
        }

        if (isset($_POST["btn_tambah"])) {
        $create_article = create_article($_POST);
        if ($create_article > 0) {
        echo "<script>
        alert('Berita berhasil ditambahkan!');
        document.location.href = '../index.php';
        </script>";
        } else {
        echo "<script>
        alert('Berita gagal ditambahkan');
        document.location.href = '../create_article.php';
        </script>";
        }
        }