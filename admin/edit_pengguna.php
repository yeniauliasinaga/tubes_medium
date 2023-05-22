<?php include 'navbar.php'; ?>
<?php include '../koneksi.php'; ?>
<?php include '../user/fungsi.php'; ?>
<?php

$id = $_GET["id_pengguna"];

$data = query("SELECT * FROM tb_pengguna WHERE id_pengguna='$id'")[0];

if (isset($_POST['btn_edit'])) {


    if (ubah($_POST)>0) {
        echo "<script>
        alert('Akun anda telah berhasil di ubah!');
        document.location.href='pengguna.php';
        </script> ";
    }

    else echo mysqli_error($koneksi);
}
?>


<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-dark mx-auto my-4">Edit Pengguna</h2>
            <hr style="border-top: 1px solid grey;">
            <p class="ml-2">
                <a href="dashboard_admin.php">Home</a> / <a href="pengguna.php">Pengguna</a> / <a
                    href="pengguna.php">Edit Pengguna</a>
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

                <form action="" method="POST" class="my-login-validation mt-3 ml-3" enctype="multipart/form-data" novalidate="">

                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$data['id_pengguna']?>">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control" name="nama" value="<?=$data['nama']?>" required
                        autofocus>
                        <div class="invalid-feedback">
                            Silahkan isi username anda
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">E-Mail Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="<?=$data['email']?>" required>
                        <div class="invalid-feedback">
                            Email invalid
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="hidden" name="gambarlama" value="<?=$data['foto_profil']?>">
                        <label for="gambar">Foto Profil</label>

                        
                            <img src="../user/img/<?=$data['foto_profil']?>" alt="gambar_diri">
                        <br><br>
                        

                         <input id="gambar" type="file" class="form-control" name="gambar" >
                    </div>

                    <div class="from-group">  <br>     </div>

                    <div class="form-group">
                                <label for="role">Role</label>
                                <select name='role' required id ='role'>
                                <?php
                                if ($data['role'] == 'admin'){
                                    $option_admin= "selected";
                                    $option_user = "";
                                }
                                else
                                if ($data['role'] == 'user'){
                                    $option_admin = "";
                                    $option_user = "selected";                                  
                                }
                                ?>
                                <option value='admin' <?=$option_admin?>>Admin</option>
                                <option value='user' <?=$option_user?>>User</option>
                                </select>
                                <div class="invalid-feedback">
                                    Ketik User yang anda inginkan
                                </div>
                            </div>


                    <div class="form-group m-0">
                        <button type="submit" name="btn_edit" class="btn btn-primary btn-block">
                            Ubah Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </body>

    </html>