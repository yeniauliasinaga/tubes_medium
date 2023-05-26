<?php
require '../koneksi.php';
include 'fungsi.php';

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['id_pengguna'])) {
    echo "<script>
            alert('Anda belum login, silahkan login terlebih dahulu');
          </script>";
    header("Location: login.php");
    exit;
}

// Mengambil ID pengguna yang sedang login
$id_pengguna = $_SESSION['id_pengguna'];

// Mendapatkan id_artikel yang sedang dibuka (contoh menggunakan $_GET['id_artikel'])
$id_artikel = $_GET['id_artikel'];

// Mengambil data artikel pengguna dengan informasi pengguna
$query_artikel = mysqli_query($koneksi, "SELECT tb_artikel.*, tb_pengguna.nama, tb_pengguna.foto_profil FROM tb_artikel JOIN tb_pengguna ON tb_artikel.id_pengguna = tb_pengguna.id_pengguna WHERE tb_artikel.id_pengguna = '$id_pengguna' AND tb_artikel.id_artikel = '$id_artikel'");
$artikel = mysqli_fetch_assoc($query_artikel);

// Mengambil data komentar pengguna
$query_komentar = mysqli_query($koneksi, "SELECT * FROM tb_komentar WHERE id_pengguna = '$id_pengguna' AND id_artikel = '$id_artikel'");
$komentar = mysqli_fetch_assoc($query_komentar);

if (isset($_POST["tambah_komentar"])) {
    $create_comment = tambah_komentar($_POST, $id_artikel);
    if ($create_comment > 0) {
        echo "<script>
            alert('Komentar berhasil ditambahkan!');
            document.location.href='';
        </script>";
    } else {
        echo "<script>
            alert('Komentar gagal ditambahkan');
            document.location.href='';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link href="../Logo/simbol.png" sizes="16x16 32x32" rel="shortcut icon">
    <title>Medium</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Daftar komentar -->
    <div style="display: flex; flex-direction: column;">
        <div style="display: flex; align-items: center;">
        <img src="../assets/img/<?php echo $artikel['foto_profil']; ?>" alt="Foto Profil" 
        style="width: 40px; height: 40px; border-radius: 50%; margin-right: 8px;">
            <div>
                <div style="font-weight: bold;"><?php echo $artikel['nama']; ?></div>
            </div>
        </div>
        <div style="margin-left: 58px;">
            <!-- Kotak komentar -->
            <form method="POST" action="">
                <textarea name="isi_komentar" placeholder="Tulis komentar..."
                    style="width: 100%; height: 100px; padding:5px;"></textarea>
                <input type="hidden" value="<?= $artikel['id_artikel']; ?>" name="id_artikel">
                <div style="display: flex; justify-content: space-between; margin-top: 8px;">
                    <button style="padding: 8px; background-color: #000; color: #fff; border: none;" type="submit"
                        name="tambah_komentar">Kirim</button>
                    <button style="padding: 8px; background-color: #ccc; color: #000; border: none;">Batal</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
