<?php include 'navbar.php';?>

<!--HALAMAN ADMIN-->

<!--card 1-->
<div class="container-fluid">
    <h1 class="text-center" style="background-color: grey;">Dashboard Admin</h1>
    <div class="container me-4 pe-3">
    <div class="container text-center">
        <div class="row mt-5 mb-5 justify-content-center">
            <!--card 3-->
            <div class="col-3 mt-3">
                <div class="card" style="width: 15rem;">
                    <img src="../assets/img/comment.png" class="card-img-top" alt="pesanan">
                    <div class="card-body">
                        <h5 class="card-title">Komentar</h5>
                        <a href="komentar.php" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>

            <!--card 4-->
                <div class="col-3 mt-3">
                    <div class="card" style="width: 15rem;">
                        <img src="../assets/img/category.png" class="card-img-top" alt="pesanan">
                        <div class="card-body">
                            <h5 class="card-title">Tag</h5>
                            <a href="kategori.php" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>

                <!--card 5-->
                <div class="col-3 mt-3">
                    <div class="card" style="width: 15rem;">
                        <img src="../assets/img/person.png" class="card-img-top" alt="account">
                        <div class="card-body">
                            <h5 class="card-title">Pengguna</h5>
                            <a href="pengguna.php" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
                
                <!--card 6-->
                <div class="col-3 mt-3">
                    <div class="card" style="width: 15rem;">
                        <img src="../assets/img/home.png" class="card-img-top" alt="pesanan">
                        <div class="card-body">
                            <h5 class="card-title">Beranda</h5>
                            <a href="../dashboard-login.php" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
