<?php
require "../koneksi.php";


//cek apakah anda sudah login jika sudah maka nggak bole ke login.php

if(isset ($_POST["btn_login"])){
  $nama_login = $_POST['nama'];
  $pass_login = $_POST['password'];
  $query = "SELECT *FROM tb_pengguna WHERE nama='$nama_login'";
  $result = mysqli_query($koneksi,$query);

  
  // cek username
  if (mysqli_num_rows($result) ===1) {
    
    // cek password
    
    $row = mysqli_fetch_assoc($result);
    if (password_verify($pass_login,$row['password'])) {


      $tarik_data = "SELECT * FROM tb_pengguna WHERE nama ='$nama_login'";
      $data = mysqli_query($koneksi,$tarik_data);
      $hasil = mysqli_fetch_assoc($data);

     
      
      $role = $hasil['role'];
      $email = $hasil['email'];
      $id_pengguna = $hasil['id_pengguna'];

      
      if($role == "user") {
          $_SESSION['id_pengguna'] = $id_pengguna;
          $_SESSION['email'] = $email;
          $_SESSION['role'] = "user";
     
          echo"<script>
    alert('Anda telah berhasil login di akun anda');
     </script>"; 

          header("location: index.php");
          exit;

      } elseif ($role == "admin") {

          $_SESSION['id_pengguna'] = $id_pengguna;
          $_SESSION['email'] = $email;
          $_SESSION['role'] = "admin";
          header("location:../admin/index.php");
          exit;
      }

    }


    
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Logo/simbol.png" sizes="16x16 32x32" rel="shortcut icon">
    <title>Medium</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
          <div class="container mb-5">
            <div class="container">
              <div class="container my-3">
                <a class="container" href=""><img class="container" src="../Logo/logo.png" alt="logo" width="70px"></a>
               </div>
            </div>
            <div class="row-sm">
              <div class="card mx-3 my-3">
                  <div class="card-body">
                    <div class="card-title">

                      <form method="POST" class="my-login-validation" novalidate="">
                        <div class="form-group">
                          <h3 class="text-center">Login</h3>
                          <p class="mt-2">Username</p>
                          <input id="email" type="text" class="form-control" name="nama" value="" required autofocus>
                            <div class="invalid-feedback">
                                Nama tidak valid
                            </div>
                        </div>

                        <div class="form-group pt-3">
                          <label for="password"> Password </label>
                          <input id="password" type="password" class="form-control" name="password" required data-eye>
                            <div class="invalid-feedback">
                                Password tidak valid
                            </div>
                        </div>

                          <button type="submit" class="btn btn-block btn-primary mt-3" name="btn_login"> Login </button>
                          <hr style="border-top: 1px solid grey;">
                          <a type="button" href="..." class="btn btn-block btn-link mt-2">Lupa Sandi?</a>
                    </div>
                  </div>
                </div>
              </div>
            <div class="row-sm">
                <div class="card mx-3 my-3">
                  <div class="card-body">
                    <div class="card-title">
                      <button type="button" class="btn btn-block btn-link mt-1"><a href="register.php">Belum memiliki akun? Daftar sekarang!</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</body>
</html>