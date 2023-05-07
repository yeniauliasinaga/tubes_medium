<?php include 'navbar.php'; ?>


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
                <form action="proses_tambah_pengguna.php" method="POST" style="width: 97%;"
                    class="my-login-validation mt-3 ml-3" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="mt-2" for="username">Username</label>
                        <input id="username" type="text" class="form-control" name="username" required autofocus>
                        <div class="invalid-feedback">
                            Silahkan isi username anda
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input id="name" type="text" class="form-control" name="nama" required autofocus>
                        <div class="invalid-feedback">
                            Ketik nama anda
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
                        <label for="level">Level</label>
                        <select name='level' required id='level'>
                            <option value='admin'>Admin</option>
                            <option value='pengguna'>Pengguna</option>
                        </select>
                        <div class="invalid-feedback">
                            Isi Level Anda
                        </div>
                    </div>

                    <div class="form-group m-0">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">
                            Ubah Data
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