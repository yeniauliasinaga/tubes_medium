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

// Mengambil data artikel pengguna
$query_pengguna = mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE id_pengguna = '$id_pengguna'");
$artikel = mysqli_fetch_assoc($query_pengguna);

$komentar = "SELECT * FROM tb_komentar WHERE id_pengguna = '$id_pengguna'";
$result = mysqli_query($koneksi, $komentar);

if (isset($_POST["tambah_komentar"])) {
    $create_comment = create_comment($_POST);
    if ($create_comment > 0) {
        echo "<script>
            alert('Komentar berhasil ditambahkan!');
            document.location.href='konten.php';
        </script>";
    } else {
        echo "<script>
            alert('Komentar gagal ditambahkan');
            document.location.href='konten.php';
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
            <img src="img/<?php echo $artikel['foto_profil']; ?>" alt="Foto Profil"
                style="width: 40px; height: 40px; border-radius: 50%; margin-right: 8px;">
            <div>
                <div style="font-weight: bold;"><?php echo $artikel['nama']; ?></div>
            </div>
        </div>
        <div style="margin-left: 58px;">
            <!-- Kotak komentar -->
            <form method="POST" action="">
                <textarea name="isi_komentar" placeholder="Tulis komentar..." style="width: 100%; height: 100px; padding:5px;"></textarea>
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
