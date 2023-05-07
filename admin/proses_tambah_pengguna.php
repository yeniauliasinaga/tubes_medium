<?php include 'navbar.php'; ?>

<?php
include '../koneksi.php';

$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$level = $_POST['level'];

$pemeriksaan_username_dan_email = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$_POST[username]' or email='$_POST[email]'"));
    if ($pemeriksaan_username_dan_email > 0) {
    echo "<h3 align = 'center' class='mt-4'>Kesalahan</h3>";
    echo "<h4 align = 'center'> Akun anda telah terdaftar, silahkan ubah form anda! </h4>";
    echo "<div class='row'>
    <div class= 'col'>
        <p align = 'right'><a href = 'pengguna.php' class='btn btn-primary'  /> Kembali ke Daftar Pengguna </a></p>
    </div>
    <div class= 'col'>
        <p><a href = 'tambah_pengguna.php' class='btn btn-primary'  /> Tambah Pengguna </a></p>
    </div>
    </div>";
    }

    else{
    $sql = "INSERT INTO akun (username,password,nama,email,level) VALUES 
    ('$username', '$password', '$nama','$email', '$level')";

    if($koneksi->query($sql)===TRUE){
    echo "<h3 align = 'center' class='mt-4'>Akun terdaftar</h3>";
    echo "<h4 align = 'center'>Registrasi Akun Anda Berhasil</h4>";
    echo "<p align = 'center'><a href = 'pengguna.php' class='btn btn-primary'  /> Kembali ke Daftar Pengguna </a></p>";
    } else {
        echo "Terjadi kesalahan: " .$sql."<br/>".$koneksi->error;
        }
    }
$koneksi->close();
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../js/login.js"></script>