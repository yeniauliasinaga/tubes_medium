<?php include 'navbar.php'; ?>


        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-dark mx-auto my-4">Edit Pengguna</h2>
                    <hr style="border-top: 1px solid grey;">
                        <p class="ml-2">
                         <a href="edit_profil.php">Edit Profil</a>
                        </p>
                    <hr style="border-top: 1px solid grey;">
                </div>
            </div>

            <div class="row">
                <div class="card mx-3 my-3" style="width: 65rem;">
                    <div class="card-header">
                        Edit Data Akun
                    </div>
                    <div class=" mx-2 my-2 row">
                        <form action="update_profil.php" method="POST" class="my-login-validation mt-3 ml-3" novalidate="">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                <input id="username" type="text" class="form-control" name="username" value="..." required autofocus>
                                <div class="invalid-feedback">
                                    Silahkan isi username anda
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input id="name" type="text" class="form-control" name="nama" value="..." required autofocus>
                                <div class="invalid-feedback">
                                    Ketik nama anda
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="..." required>
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

                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block">
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