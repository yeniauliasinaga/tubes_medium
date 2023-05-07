<?php include 'navbar.php'; ?>

<?php 

//memeriksa inputan akun yang ingin dirubah
include '../koneksi.php';
$id = $_SESSION['nama'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$berita = $_POST['isi_berita'];
$tanggal = $_POST['tanggal_berita'];


// ambil data file
$namaFile = $_FILES['file']['name'];
$namaSementara = $_FILES['file']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../img/berita/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload && $_SESSION['level'] == "admin") {
    $query = mysqli_query($koneksi, "INSERT INTO berita (penulis,judul,id_kategori,gambar_berita,isi_berita,tanggal_berita) VALUES ('$id', '$judul', '$kategori', '$namaFile' ,'$berita', '$tanggal')");
    echo "<h3 align = 'center' class='mt-4'>Berita ditambahkan</h3>";
    echo "<h4 align = 'center'>Berita dengan judul  $judul  berhasil ditambahkan</h4>";
    echo "<div class='row'>
    <div class= 'col'>
        <p align = 'right'><a href = 'pengelola_berita.php' class='btn btn-primary'  /> Kembali ke Pengelola Berita </a></p>
    </div>
    <div class= 'col'>
        <p><a href = 'admin.php' class='btn btn-primary'  /> Kembali ke Beranda Utama </a></p>
    </div>
    </div>";}

elseif ($terupload && $_SESSION['level'] == "pengguna"){
    $query = mysqli_query($koneksi, "INSERT INTO berita (penulis,judul,id_kategori,gambar_berita,isi_berita,tanggal_berita) VALUES ('$id', '$judul', '$kategori', '$namaFile' ,'$berita', '$tanggal')");
    echo "<h3 align = 'center' class='mt-4'>Berita ditambahkan</h3>";
    echo "<h4 align = 'center'>Berita dengan judul  $judul berhasil ditambahkan</h4>";
    echo "<p align = 'center'><a href = 'user.php' class='btn btn-primary'  /> Kembali ke Halaman Utama </a></p>";
}

 else {
    echo "Upload Gagal!";
}




$koneksi->close();

?>

