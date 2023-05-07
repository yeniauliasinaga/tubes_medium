<?php include 'navbar.php'; ?>


        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-dark mx-auto my-4">Edit Kategori</h2>
                    <hr style="border-top: 1px solid grey;">
                        <p class="ml-2">
                            <a href="...">Home</a> / <a href="...">Pengguna</a> / <a href="pengguna.php">Edit Pengguna</a>
                        </p>
                    <hr style="border-top: 1px solid grey;">
                </div>
            </div>

            <div class="row">
                <div class="card mx-3 my-3" style="width: 65rem;">
                    <div class="card-header">
                        Edit Kategori
                    </div>
                    <div class=" mx-2 my-2 row">
                        <form action="proses_update_kategori.php" method="POST" class="my-login-validation mt-3 ml-3" novalidate="">
                            <div class="form-group">
                                <label for="kategori">Nama Kategori</label>
                                <input type="hidden" name="id_kategori" value="syntax php">
                                <input id="kategori" type="text" class="form-control" name="kategori" value="syntax php" required>
                                <div class="invalid-feedback">
                                    Silahkan isi username anda
                                </div>
                            </div>

                            <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Ubah Nama
                                </button>
                            </div>
                        </form>
                </div>			
            </div>
        </div>
        
        <?php include 'logout_conf.php'; ?>

    </body>
</html>