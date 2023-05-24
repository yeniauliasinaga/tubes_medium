<?php
require '../koneksi.php';

if (!isset($_SESSION['id_pengguna'])) {
    echo "<script>
        alert('Anda belum login, silahkan login terlebih dahulu');
    </script>";
    header("Location: login.php");
    exit;
}

$id_pengguna = $_SESSION['id_pengguna'];

// Ambil daftar bookmark pengguna berdasarkan id_pengguna
$query = "SELECT tb_artikel.*, tb_penanda.id_penanda
          FROM tb_artikel
          INNER JOIN tb_penanda ON tb_artikel.id_artikel = tb_penanda.id_artikel
          WHERE tb_penanda.id_pengguna = $id_pengguna";
$result = mysqli_query($koneksi, $query);


// untuk menghapus bookmark dari list
if (isset($_GET['id_penanda'])) {
    $id_penanda = $_GET['id_penanda'];

    // Hapus item bookmark berdasarkan id_penanda
    $delete_query = "DELETE FROM tb_penanda WHERE id_penanda = $id_penanda";
    $delete_result = mysqli_query($koneksi, $delete_query);

    if ($delete_result) {
        echo "<script>
            alert('Item has been deleted successfully.');
            window.location.href = 'library.php';
        </script>";
        exit;
    } else {
        echo "<script>
            alert('Failed to delete item.');
            window.location.href = 'library.php';
        </script>";
        exit;
    }
}
?>

                <!-- bookmark -->
                <div class="row">
                    <div class="text-start m-3">
                        <div class="container text-start">
                            <!-- Tampilkan konten bookmark -->
                            <div class="row">
                                <?php while ($artikel = mysqli_fetch_assoc($result)) { ?>
                                <div class="col-md-8 mb-4">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <!-- Tampilkan informasi artikel -->
                                            <h5 class="font-weight-bold my-2">
                                                <a href="konten.php?id_artikel=<?php echo $artikel['id_artikel']; ?>"
                                                    style="color: black">
                                                    <?php echo $artikel['judul_artikel']; ?>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm float-end"
                                                    onclick="deleteItem(<?php echo $artikel['id_penanda']; ?>)">
                                                    Delete this item
                                                </button>
                                            </h5>
                                            <h6 class="text-muted">
                                                <?php echo substr($artikel['isi_artikel'], 0, 150); ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
function deleteItem(id_penanda) {
    if (confirm("Are you sure you want to delete this item?")) {
        window.location.href = 'library.php?id_penanda=' + id_penanda;
    }
}
</script>
</body>

</html>