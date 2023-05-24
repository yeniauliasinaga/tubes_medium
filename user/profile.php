<?php include '../tata_letak/navbar_login.php'; ?>
<?php include '../koneksi.php'; ?>
<?php include 'fungsi.php'; ?>
<?php 
    $id = $_SESSION["id_pengguna"];

    $data = query("SELECT * FROM tb_pengguna WHERE id_pengguna='$id'");
    $row = mysqli_fetch_assoc($data);
    

    if (isset($_POST['btn_save'])) {
        if (ubah_profil($_POST) > 0) {
            echo "<script>
            alert('Akun anda telah berhasil diubah!');
            document.location.href='profile.php';
            </script> ";
        }
        else {
            echo mysqli_error($koneksi);
        }
    }

    if (isset($_POST['btn_delete'])) {
        if (hapus_profil($_POST) > 0) {
            echo "<script>
            alert('Foto anda telah berhasil dihapus!');
            </script> ";
        }
        else {
            echo mysqli_error($koneksi);
        }
    }
?>


<div class="container text-start">
    <div class="row">
        <div class="col-sm-9 mt-5 mb-5 pt-5">
            <h1><?php echo $_SESSION['nama']; ?></h1>
            <div class="text-center mt-5 pt-3">
                <div class="row row-cols-auto">
                    <a class="col" style="text-decoration: none; color: black;" href="home.php">Home</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mt-5 pt-5">
            <div class="s ax">
                <div class="ew ex ey s">
                    <a class="ay aj az ba bb am bc w an ao ap aq ar as at" rel="noopener follow"
                        href="../Logo/logo.png">
                        <div class="s by">
                            <!--Foto user-->
                            <img alt="<?php echo $_SESSION['nama']; ?>" class="rounded-circle img-responsive"
                                src="../user/img/<?php echo $row['foto_profil']; ?>" width="84" height="65"
                                loading="lazy">
                            <div class="cg ch s pz qa ck u be cl">
                            </div>
                        </div>
                    </a>
                    <div class="qb s">
                        <h2 class="pw-author-name al fh fi ag fj bp">
                            <span class="jb"><?php echo $row['nama']; ?></span>
                        </h2>
                        <h6 class="pw-author-name al fh fi ag fj bp">
                            <span class="jb"><?php echo $row['bio']; ?></span>
                        </h6>
                        </a>
                    </div>
                    <div class="jc s"></div>
                    <div class="lf s"></div>
                    <div class="aga qe s">
                        <p class="al b ak ag fs">
                            <a class="ay aj az ba bb am bc w an ao ap aq ar as at" data-bs-toggle="modal"
                                data-bs-target="#editprofile" rel="noopener follow" href="">Edit
                                profile
                            </a>
                        </p>
                        <!-- Modal -->
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="modal fade" id="editprofile" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Profile information</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Photo</p>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <input type="hidden" name="gambarlama"
                                                        value="<?php echo $row['foto_profil']; ?>">
                                                    <img src="img/<?php echo $row['foto_profil']; ?>" alt="ini gambar"
                                                        width="40%">
                                                    <input id="gambar" type="file" class="form-control" name="gambar">
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="col">
                                                        <button type="submit" name="btn_delete">Remove</button>
                                                    </div>
                                                    <div class="col">
                                                        <p>Recommended: Square JPG or PNG at least 1,000 pixels per
                                                            side.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-start">
                                                <p><input type="text" name="nama" id=""
                                                        value="<?php echo $row['nama']; ?>"></p>
                                                <p><input type="text" name="bio" id=""
                                                        value="<?php echo $row['bio']; ?>"></p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-success"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success" name="btn_save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        </body>

        </html>