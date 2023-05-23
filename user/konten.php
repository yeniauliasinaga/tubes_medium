<?php
require '../koneksi.php';

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['id_pengguna'])) {
    echo "<script>
            alert('Anda belum login, silahkan login terlebih dahulu');
          </script>";
    header("Location: login.php");
    exit;
}

$id = $_GET['id_artikel'];

// Mengambil konten artikel berdasarkan ID
$konten = mysqli_query($koneksi, "SELECT tb_artikel.judul_artikel, tb_artikel.tgl_artikel, tb_artikel.id_pengguna, tb_artikel.id_artikel, tb_artikel.isi_artikel, tb_artikel.gambar, tb_pengguna.nama, COUNT(tb_like.id_like) AS banyak_like, COUNT(tb_komentar.id_komentar) AS komentar FROM tb_artikel JOIN tb_pengguna ON tb_artikel.id_pengguna = tb_pengguna.id_pengguna LEFT JOIN tb_like ON tb_artikel.id_artikel = tb_like.id_artikel LEFT JOIN tb_komentar ON tb_artikel.id_artikel = tb_komentar.id_artikel WHERE tb_artikel.id_artikel = $id GROUP BY tb_artikel.id_artikel");


// Memeriksa apakah terdapat konten artikel
if (mysqli_num_rows($konten) > 0) {
    $artikel = mysqli_fetch_array($konten);

    // Memuat tata letak navbar berdasarkan status login pengguna
    if (empty($_SESSION['id_pengguna'])) {
        include '../tata_letak/navbar_nologin.php';
    } else {
        include '../tata_letak/navbar_login.php';
    }
?>

<body>
    <div class="container content">
        <div class="row">
            <div class="col">
                <div class="card kartu mx-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <img class="container" style="width:500px;" src="../assets/berita/<?=$artikel['gambar']?>" alt="gambar">
                            </div>
                            <div class="col mx-4 mx-4 my-4 tengah">
                                <p class="judul2"><?=$artikel['judul_artikel']?></p>
                                <div class="border-bottom mb-3"></div>
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill mb-1" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                    <span class="ms-1"><?=$artikel['nama']?></span>
                                </div>
                                <div class="border-bottom mb-3"></div>
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week-fill me-1" viewBox="0 0 16 16">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zM2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                    <span><?=$artikel['tgl_artikel']?></span>
                                </div>
                                <div class="border-bottom mb-3"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" id="like">
                                    <path d="M21.3,10.08A3,3,0,0,0,19,9H14.44L15,7.57A4.13,4.13,0,0,0,11.11,2a1,1,0,0,0-.91.59L7.35,9H5a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17.73a3,3,0,0,0,2.95-2.46l1.27-7A3,3,0,0,0,21.3,10.08ZM7,20H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H7Zm13-7.82-1.27,7a1,1,0,0,1-1,.82H9V10.21l2.72-6.12A2.11,2.11,0,0,1,13.1,6.87L12.57,8.3A2,2,0,0,0,14.44,11H19a1,1,0,0,1,.77.36A1,1,0,0,1,20,12.18Z"></path>
                                </svg>
                                <span><?=$artikel['banyak_like']?></span>
                                <div class="border-bottom mb-3"></div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" id="comment">
                                    <path d="M18,2H6A3,3,0,0,0,3,5V16a3,3,0,0,0,3,3H8.59l2.7,2.71A1,1,0,0,0,12,22a1,1,0,0,0,.65-.24L15.87,19H18a3,3,0,0,0,3-3V5A3,3,0,0,0,18,2Zm1,14a1,1,0,0,1-1,1H15.5a1,1,0,0,0-.65.24l-2.8,2.4L9.71,17.29A1,1,0,0,0,9,17H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4H18a1,1,0,0,1,1,1Z"></path>
                                </svg>
                                <span><?=$artikel['komentar']?></span>
                                <div class="border-bottom mb-3"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <br>
                                <p class="text-center"><?php echo substr($artikel['isi_artikel'], 0, 150); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <br>
                                <h5 class="text-center mt-3">Komentar</h5>
                                <?php
                                    $query_komentar = mysqli_query($koneksi, "SELECT * FROM tb_komentar WHERE id_artikel = $id");
                                    while ($komentar = mysqli_fetch_array($query_komentar)) {
                                        $id_pengguna = $komentar['id_pengguna'];
                                        $query_pengguna = mysqli_query($koneksi, "SELECT nama FROM tb_pengguna WHERE id_pengguna = $id_pengguna");
                                        $pengguna = mysqli_fetch_array($query_pengguna);
                                ?>
                                <div class="card mx-3 mb-3">
                                    <div class="card-body ">
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill me-1" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            </svg>
                                            <span class="ms-1"><?=$pengguna['nama']?></span>
                                        </div>
                                        <p class="mt-2"><?=$komentar['komentar']?></p>
                                        <span class="ms-1"><?=$komentar['tanggal']?></span>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php include 'komentar.php'; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
