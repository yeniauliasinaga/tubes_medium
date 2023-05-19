<?php
require "../koneksi.php";

if(isset ($_POST["btn_login"])){
  $nama_login = $_POST['nama'];
  $pass_login = $_POST['password'];
  $login = "SELECT *FROM tb_pengguna WHERE nama='$nama_login' AND password='$pass_login'";
  $result=mysqli_query($koneksi, $login);
  while($masuk=mysqli_fetch_assoc($result)){
    $id=$masuk['id_pengguna'];
    $nama=$masuk['nama'];
    $password=$masuk['password'];
    $email=$masuk['email'];
  }
  if(mysqli_num_rows($result)== 1){
    $masuk=mysqli_fetch_assoc($result);
    if($nama_login==$nama && $pass_login== $password){
      SESSION_START();
      $_SESSION['id_pengguna']=$id;
      echo"<script>
      alert('Anda sudah berhasil login');
      document.location.href='index.php'
      </script>";
    }
  }
  else{
    $error=true;
    echo"<script>
    alert('Anda tidak berhasil login');
    document.location.href='login.php'
    </script>";
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
                                <input id="email" type="text" class="form-control" name="nama" value="" required
                                    autofocus>
                                <div class="invalid-feedback">
                                    Nama tidak valid
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <label for="password"> Password </label>
                                <input id="password" type="password" class="form-control" name="password" required
                                    data-eye>
                                <div class="invalid-feedback">
                                    Password tidak valid
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block btn-primary mt-3" name="btn_login"> Login
                            </button>
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
                        <button type="button" class="btn btn-block btn-link mt-1"><a href="register.php">Belum memiliki
                                akun? Daftar sekarang!</a></button>
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