<?php
include '../tata_letak/navbar_login.php';
require '../koneksi.php';

if (!isset($_SESSION['id_pengguna'])) {
    echo "<script>
        alert('Anda belum login, silahkan login terlebih dahulu');
    </script>";
    header("Location: login.php");
    exit;
}

$query = "SELECT *
        FROM tb_artikel, tb_pengguna, tb_tag
        WHERE tb_artikel.id_pengguna = tb_pengguna.id_pengguna
        AND tb_artikel.id_tag = tb_tag.id_tag
        ORDER BY RAND()";

$result = mysqli_query($koneksi, $query);
?>

<div class="container text-start">
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="container text-start mr-5 mt-5">
                    <div class="row row-cols-auto mr-5 mt-5">
                        <div class="col"><a href="../user/suggestion.php"><img src="../Logo/plus.png" width="35px"></a>
                        </div>
                        <div class="col">For you</div>
                        <div class="col">Following</div>
                        <div class="col">Technology</div>
                        <div class="col">Data Science</div>
                        <div class="col">Programming</div>
                    </div>
                </div>
            </div>

            <!-- Artikel -->
            <div class="container py-5">
                <div class="row">
                    <?php while ($artikel = mysqli_fetch_array($result)) { ?>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <small>
                                    <img class="rounded-circle img-responsive" src="img/<?=$artikel['foto_profil']?>"
                                        alt="">
                                    <?=$artikel['nama']?>
                                </small>
                                <br>
                                <h5 class="font-weight-bold my-2">
                                    <a href="konten.php?id_artikel=<?=$artikel['id_artikel']?>" style="color: black">
                                        <?=$artikel['judul_artikel']?>
                                    </a>
                                </h5>
                                <h6 class="text-muted">
                                    <?php echo substr($artikel['isi_artikel'], 0, 150); ?>
                                </h6>
                                <ul class="list-inline text-muted">
                                    <li class="list-inline-item">
                                        <small><?=$artikel['tgl_artikel']?></small>
                                    </li>
                                    <li class="list-inline-item">
                                        <small>.</small>
                                    </li>
                                    <li class="list-inline-item">
                                        <small><?php rand(1, 7)?> min read</small>
                                    </li>
                                    <li class="list-inline-item small">
                                        <small><i class="fas fa-star"><?=$artikel['tag']?></i></small>
                                    </li>
                                    <li class="list-inline-item float-right">
                                        <a href="" class="text-dark"><i class="far fa-bookmark"></i></a>
                                    </li>
                                </ul>
                                <div class="col-3">
                                    <img class="w-100  d-none d-sm-block" src="../assets/berita/<?=$artikel['gambar']?>" alt="gambar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <br>
            <!-- kolom 2-->
            <?php include '../tata_letak/sidebar.php'; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>