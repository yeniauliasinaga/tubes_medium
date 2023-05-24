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

// Mengambil konten artikel berdasarkan ID
$story = mysqli_query($koneksi, "SELECT * FROM tb_story JOIN tb_pengguna ON tb_story.id_pengguna = tb_pengguna.id_pengguna WHERE tb_story.id_pengguna = '$_SESSION[id_pengguna]'");

include '../tata_letak/navbar_login.php';
?>


<div class="container text-start">
    <div class="row">
        <div class="col m-5 p-3">
            <div class="row">
                <div class="col-7">
                    <h1 class="text-start">Your Stories</h1>
                </div>
                <div class="col">
                    <a type="button" href="create_story.php" class="btn btn-success btn-rounded">Write a story</a>
                </div>
            </div>

            <div class="text-center mt-5">
                <div class="row row-cols-auto">
                    <h5 style="text-decoration: none; color: black;">Published</h5>
                </div>
            </div>

            <div class="container text-start">
                <?php while ($row = mysqli_fetch_assoc($story)) { ?>
                    <div class="row">
                        <div class="col pt-4">
                            <h5 class="card-title"><?= $row['judul_story'] ?>
                            <span class="mx-4"><?= $row['tgl_story'] ?></span></h5>
                            <p class="card-text my-3"><?= substr($row['isi_story'], 0, 150) ?></p>
                        </div>
                        <div class="col-2">
                            <!-- Example single danger button -->
                            <div class="btn-group pt-4">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    More
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit story</a></li>
                                    <li><a class="dropdown-item" href="#">Delete story</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr> <!-- Add a horizontal line between stories -->
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
