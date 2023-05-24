<?php 
require '../koneksi.php';
include 'profile.php'; 

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['id_pengguna'])) {
    echo "<script>
            alert('Anda belum login, silahkan login terlebih dahulu');
          </script>";
    header("Location: login.php");
    exit;
}

// Mengambil konten artikel berdasarkan ID
$story = mysqli_query($koneksi, "SELECT * FROM tb_artikel JOIN tb_pengguna ON tb_artikel.id_pengguna = tb_pengguna.id_pengguna WHERE tb_artikel.id_pengguna = '$_SESSION[id_pengguna]'");
?>

<?php while ($row = mysqli_fetch_assoc($story)) { ?>
<div class="container text-start">
    <div class="row">
        <div class="col-sm-8">
            <!-- Article 1 -->
            <div class="row mb-2">
                <div class="col-12 col-sm-8">
                    <div class="col-12">
                        <small>
                            <!-- JUDUL ARTICLE -->
                            <a style="text-decoration: none; color: black;" href="">
                                <h6 class="font-weight-bold my-2">
                                    <?= $row['judul_artikel'] ?>
                                    <span class="mx-5"> 
                                        <?= $row['tgl_artikel'] ?>
                                    </span>
                                </h6>
                            </a>
                        </small>

                        <!-- DESKRIPSI ARTIKEL -->
                        <a style="text-decoration: none; color: black;" href="">
                            <h6 for="berita1" class="text-muted">
                                <?= substr($row['isi_artikel'], 0, 150) ?>
                            </h6>
                        </a>
                        <div class="btn-group">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Edit article</a></li>
                                <li><a class="dropdown-item" href="#">Delete article</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </article>
                <?php } ?>
            </div>
        </div>
    </div>