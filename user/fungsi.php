<?php

include '../koneksi.php';

function register($pengguna){
    global $koneksi;
    $nama=htmlspecialchars($pengguna["nama"]);
    $email=htmlspecialchars($pengguna["email"]);
    $password=htmlspecialchars($pengguna["password"]);
   
    $periska_email= mysqli_query($koneksi, "SELECT email FROM tb_pengguna WHERE email='$email'");
    if(mysqli_num_rows($periska_email)>0){
        echo "<script>
        alert('Email anda telah terdaftar! Silahkan Login!');
        document.location.href='login.php';
        </script>";
    }
    else{
        $insert="INSERT INTO tb_pengguna(id_pengguna, nama, email, password) VALUES
        ('','$nama', '$email', '$password')";
        mysqli_query($koneksi, $insert);
    }
    return mysqli_affected_rows($koneksi);
}

if(isset($_POST["btn_daftar"])){
    if(register($_POST)>0){
        echo "<script>
        alert('Akun anda telah berhasil didaftar! Silahkan Login!');
        document.location.href='login.php';
        </script>";  
    }
    else{
        echo "<script>
        alert('Akun anda tidak dapat terdaftar!');
        document.location.href='register.php';
        </script>";
    }
}