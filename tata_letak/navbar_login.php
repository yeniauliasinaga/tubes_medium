<?php
require '../koneksi.php';

if (isset($_SESSION['id_pengguna'])) {
  $id_pengguna = $_SESSION['id_pengguna'];

  // Query untuk mendapatkan foto profil dari pengguna
  $query = "SELECT foto_profil FROM tb_pengguna WHERE id_pengguna = '$id_pengguna'";
  $result = mysqli_query($koneksi, $query);

  if ($result && mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $fotoProfil = "../user/img/" . $row['foto_profil'];
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

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar" href="#"><img src="../Logo/simbol.png" style="width:100px; height:70px;"></a>
        <form class="text-center d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                style="width:750px;">
            <button class="btn btn-outline-success" style="width: 140px;" type="submit">Search Medium</button>
        </form>

        <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../user/create_article.php">Write</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../user/notifications.php"><img src="../Logo/notifikasi.webp"
                            style="width:20px; height:20px;"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php
                        // Mendapatkan foto profil pengguna dari session atau database
                        $fotoProfil = "../user/img/default.jpg"; // Gambar default jika tidak ada foto profil

                        if (isset($_SESSION['id_pengguna'])) {
                            $id_pengguna = $_SESSION['id_pengguna'];

                            // Query untuk mendapatkan foto profil dari pengguna
                            $query = "SELECT foto_profil FROM tb_pengguna WHERE id_pengguna = $id_pengguna";
                            $result = mysqli_query($koneksi, $query);

                            if ($result && mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                $fotoProfil = "../user/img/" . $row['foto_profil'];
                            }
                        }
                        ?>
                        <img class="rounded-circle img-responsive" src="<?= $fotoProfil ?>" alt=""
                            style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%;">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../user/profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="../user/library.php">Library</a></li>
                        <li><a class="dropdown-item" href="../user/stories.php">Stories</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../user/refine_recommended.php">Refine recommendations</a>
                        </li>
                        <li><a class="dropdown-item" href="../logout.php">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
