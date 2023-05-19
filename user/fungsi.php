<?php

include '../koneksi.php';


/* fungsi untuk register */
function register($pengguna)
{
    global $koneksi;
    $nama = htmlspecialchars($pengguna["nama"]);
    $email = htmlspecialchars($pengguna["email"]);
    $password = htmlspecialchars($pengguna["password"]);

    $periska_email = mysqli_query($koneksi, "SELECT email FROM tb_pengguna WHERE email='$email'");
    if (mysqli_num_rows($periska_email) > 0) {
        echo "<script>
        alert('Email anda telah terdaftar! Silahkan Login!');
        document.location.href='login.php';
        </script>";
    } else {
        $insert = "INSERT INTO tb_pengguna(id_pengguna, nama, email, password) VALUES
        ('','$nama', '$email', '$password')";
        mysqli_query($koneksi, $insert);
    }
    return mysqli_affected_rows($koneksi);
}

if (isset($_POST["btn_daftar"])) {
    if (register($_POST) > 0) {
        echo "<script>
        alert('Akun anda telah berhasil didaftar! Silahkan Login!');
        document.location.href='login.php';
        </script>";
    } else {
        echo "<script>
        alert('Akun anda tidak dapat terdaftar!');
        document.location.href='register.php';
        </script>";
    }
}

/* fungsi untuk tambah story */
function create_story($story)
{
    global $koneksi;
    $judul = htmlspecialchars($story["judul"]);
    $isi = htmlspecialchars($story["isi"]);
    $kategori = $_POST['id_tag'];
    $tgl_story = $_POST['tgl_story'];
    $id_pengguna = $_SESSION['id_pengguna'];
    
    // ambil data file
    $namaFile = $_FILES['gambar']['name'];
    $namaSementara = $_FILES['gambar']['tmp_name'];
    
    // tentukan lokasi file akan dipindahkan
    $dirUpload = "../assets/story/";
    
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
    
    $insert = "INSERT INTO tb_story (id_pengguna, id_tag, judul, isi, gambar, tgl_story)
               VALUES ('$id_pengguna', '$kategori', '$judul', '$isi', '$namaFile', '$tgl_story')";
    
    mysqli_query($koneksi, $insert);
    
    return mysqli_affected_rows($koneksi);
}

if (isset($_POST["btn_tambah"])) {
    $create_story = create_story($_POST);
    if ($create_story > 0) {
        echo "<script>
        alert('Story berhasil ditambahkan!');
        document.location.href='stories.php';
        </script>";
    } else {
        echo "<script>
        alert('Story gagal ditambahkan');
        document.location.href='create_story.php';
        </script>";
    }
}

function create_article($artikel)
{
    global $koneksi;
    $id_pengguna = $_SESSION['id_pengguna'];
    $kategori = $_POST['id_tag'];
    $judul_artikel = htmlspecialchars($artikel["judul_artikel"]);
    $isi_artikel = htmlspecialchars($artikel["isi_artikel"]);
    $tanggal = $_POST['tgl_artikel'];

// ambil data file
$namaFile = $_FILES['gambar']['name'];
$namaSementara = $_FILES['gambar']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../assets/berita/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

$insert = "INSERT INTO tb_artikel (id_artikel, id_pengguna, id_tag, judul_artikel, isi_artikel, gambar, tgl_artikel)
VALUES ('','$id_pengguna', '$kategori', '$judul_artikel', '$isi_artikel', '$namaFile', '$tanggal')";

mysqli_query($koneksi, $insert);

return mysqli_affected_rows($koneksi);
}if (isset($_POST["btn_tambah_artikel"])) {
    $create_article = create_article($_POST);
    if ($create_article > 0) {
        echo "<script>
        alert('Artikel berhasil ditambahkan!');
        document.location.href='stories.php';
        </script>";
    } else {
        echo "<script>
        alert('Artikel gagal ditambahkan');
        document.location.href='create_story.php';
        </script>";
    }
}