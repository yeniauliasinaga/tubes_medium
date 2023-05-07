<?php include 'navbar.php'; ?>

<?php
include '../koneksi.php';
if(empty($_SESSION['username']) || $_SESSION['level'] == "pengguna"){
    header("Location: error.php");
}

$kategori = $_POST['kategori'];

$pemeriksaan_kategori = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori='$_POST[kategori]'"));
    if ($pemeriksaan_kategori > 0) {
    echo "<div class='card border-danger mx-auto mt-4' style='max-width: 18rem;'>
            <h3 align = 'center' class='mt-4' style='color: red;'>Kesalahan</h3>
            <h5 align = 'center' class='mb-2' style='color: red;'> Nama Kategori telah tersedia, silahkan ubah nama kategori yang akan diinput! </h5>
            <div class='row mt-2'>
                <div class= 'col ml-3'>
                    <p align = 'right'><a href = 'kategori.php' class='btn btn-secondary'  /> Kembali ke Kategori </a></p>
                </div>
                <div class= 'col mr-3'>
                    <p><a href = 'tambah_kategori.php' class='btn btn-primary'  /> Tambah Kategori </a></p>
                </div>
            </div>
        </div>";}

    else{
    $sql = "INSERT INTO kategori (kategori) VALUES 
    ('$kategori')";

    if($koneksi->query($sql)===TRUE){
    echo "<h3 align = 'center' class='mt-4'>Berhasil</h3>";
    echo "<h4 align = 'center'>Kategori baru berhasil dibuat</h4>";
    echo "<p align = 'center'><a href = 'kategori.php' class='btn btn-primary'  /> Kembali ke Kategori </a></p>";
    } else {
        echo "Terjadi kesalahan: " .$sql."<br/>".$koneksi->error;
        }
    }
$koneksi->close();
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../js/login.js"></script>