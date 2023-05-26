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

$result = mysqli_query($koneksi, "SELECT * FROM tb_artikel, tb_pengguna, tb_tag
        WHERE tb_artikel.id_pengguna = tb_pengguna.id_pengguna
        AND tb_artikel.id_tag = tb_tag.id_tag
        ORDER BY RAND()");



//$result = mysqli_query($koneksi, $query);
if (isset($_POST["btn_cari"])) {
    $result = cari($_POST["key"]);
    // var_dump($result);die;
}
?>

<?php
    $id_pengguna = $_SESSION['id_pengguna'];


    if (isset($_POST['bookmark'])) {
        $id_artikel = $_POST['id_artikel'];
        $id_pengguna = $_POST['id_pengguna'];
      
        // Periksa apakah penandaan sudah ada sebelumnya
        $query_check1 = "SELECT * FROM tb_penanda WHERE id_artikel = $id_artikel AND id_pengguna = $id_pengguna";
        $result_check1 = mysqli_query($koneksi, $query_check1);
      
        if (mysqli_num_rows($result_check1) > 0) {
          // Bookmark sudah ada, lakukan tindakan sesuai kebutuhan
          // Contoh: Hapus bookmark
          $query_delete = "DELETE FROM tb_penanda WHERE id_artikel = $id_artikel AND id_pengguna = $id_pengguna";
          mysqli_query($koneksi, $query_delete);
          echo "<script>
          alert('Bookmark telah berhasil dihapus!');
          </script> ";
      } else {
          // Bookmark belum ada, tambahkan bookmark
          $query_insert = "INSERT INTO tb_penanda VALUES ('',$id_artikel, $id_pengguna)";
          mysqli_query($koneksi, $query_insert);
          echo "<script>
          alert('Bookmark telah berhasil ditambahkan!');
          </script> ";
        }
      }
    
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
                    </div>
                </div>
            </div>

            <!-- Artikel -->
            <div class="container py-5">
                <div class="row">
                    <?php foreach ($result as $artikel) { ?>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <small>
                                    <img class="rounded-circle img-responsive" src="../assets/img/<?=$artikel['foto_profil']?>"
                                        alt=""
                                        style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%;">
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
                                    <li class="list-inline-item small">
                                        <small><i class="fas fa-star"><?=$artikel['tag']?></i></small>
                                    </li>
                                    <li class="list-inline-item float-right">
                                    <?php
                                        $id_artikel=$artikel['id_artikel'];
                                        $query_check = "SELECT * FROM tb_penanda WHERE id_artikel = $id_artikel AND id_pengguna = $id_pengguna";
                                        $result_check = mysqli_query($koneksi, $query_check);

                                        // Jika artikel sudah ditandai sebagai bookmark
                                        if (mysqli_num_rows($result_check) > 0) {
                                        echo '<form method="post" action="">';
                                        echo '<input type="hidden" name="id_artikel" value="' .$artikel['id_artikel'] . '">';
                                        echo '<input type="hidden" name="id_pengguna" value="' . $id_pengguna . '">';
                                        echo '<button type="submit" class="btn btn-secondary" name="bookmark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                        <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"></path>
                                        <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"></path>
                                        </svg>
                                         </button>';
                                        echo '</form>';
                                        } else {
                                        echo '<form method="post" action="">';
                                        echo '<input type="hidden" name="id_artikel" value="' . $id_artikel . '">';
                                        echo '<input type="hidden" name="id_pengguna" value="' . $id_pengguna . '">';
                                        echo '<button type="submit" class="btn btn-outline-secondary" name="bookmark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
                                                <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"></path>
                                                <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"></path>
                                                </svg>
                                                <span class="visually-hidden">Button</span>
                                                </button>';
                                        echo '</form>';
                                        }
                                        ?>
                                    </li>
                                </ul>
                                <div class="col-3">
                                    <img class="w-100  d-none d-sm-block" src="../assets/img/<?=$artikel['gambar']?>"
                                        alt="gambar">
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