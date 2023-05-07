<?php include 'navbar.php'; ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-dark mx-auto my-4">Tambah Kategori</h2>
            <hr style="border-top: 1px solid grey;">
            <p class="ml-2">
                <a href="dashboard_admin.php">Home</a> / <a href="kategori.php">Kategori</a> / <a
                    href="kategori.php">Tambah Kategori</a>
            </p>
            <hr style="border-top: 1px solid grey;">
        </div>
    </div>

    <div class="row">
        <div class="card mx-3 my-3" style="width: 65rem;">
            <div class="card-header">
                Tambah Kategori
            </div>
            <div class=" mx-2 my-2 row">
                <form action="proses_tambah_kategori.php" method="POST" style="width: 97%;"
                    class="my-login-validation mt-3 ml-3" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="mt-2" for="kategori">Nama Kategori</label>
                        <input id="kategori" type="text" class="form-control" name="kategori" required>
                    </div>

                    <div class="form-group m-0">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">
                            Tambah Kategori
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </body>

    </html>