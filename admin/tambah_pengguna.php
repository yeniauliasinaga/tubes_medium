<?php include 'navbar.php'; ?>
<?php include '../user/fungsi.php'; ?>
<?php
if (isset($_POST['btn_tambah'])) {


if (tambah_pengguna($_POST)>0) {
    echo "<script>
    alert('Akun telah berhasil didaftar!');
    document.location.href='pengguna.php';
    </script> ";
}

else echo mysqli_error($conn);
}
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-dark mx-auto my-4">Tambah Pengguna</h2>
            <hr style="border-top: 1px solid grey;">
            <p class="ml-2">
                <a href="dashboard_admin.php">Home</a> / <a href="pengguna.php">Pengguna</a> / <a
                    href="pengguna.php">Tambah Pengguna</a>
            </p>
            <hr style="border-top: 1px solid grey;">
        </div>
    </div>

    <div class="row">
        <div class="card mx-3 my-3" style="width: 65rem;">
            <div class="card-header">
                Tambah Pengguna
            </div>
            <div class=" mx-2 my-2 row">
                <form action="" method="POST" style="width: 97%;"
                    class="my-login-validation mt-3 ml-3" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="mt-2" for="username">Username</label>
                        <input id="username" type="text" class="form-control" name="nama" required autofocus>
                        <div class="invalid-feedback">
                            Silahkan isi username anda
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="email">E-Mail Address</label>
                        <input id="email" type="email" class="form-control" name="email" required>
                        <div class="invalid-feedback">
                            Email tidak valid
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required data-eye>
                        <div class="invalid-feedback">
                            Password dibutuhkan
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password2">Konfirmasi Password</label>
                        <input id="password2" type="password" class="form-control" name="password2" required data-eye>
                        <div class="invalid-feedback">
                            Konfirmasi Password
                        </div>
                    </div>
                    <div class="from-group">
                         <input type="file" name="gambar" id="gambar">  
                     </div>
                    
                    <div class="from-group">  <br>     </div>


                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name='role' required id='role'>
                            <option value='admin'>Admin</option>
                            <option value='user'>User</option>
                        </select>
                        <div class="invalid-feedback">
                            Isi Level Anda
                        </div>
                    </div>
                    <div class="from-group">  <br><br><br>     </div>
                    <div class="form-group m-0">
                        <button type="submit" name="btn_tambah" class="btn btn-primary btn-block">
                            Tambah Pengguna
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    </body>

    </html>