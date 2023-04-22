<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Logo/simbol.png" sizes="16x16 32x32" rel="shortcut icon">
    <title>Medium</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar" href="#"><img src="Logo/simbol.png" style="width:100px; height:70px;"></a>
    <form class="text-center d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width:900px;">
        <button class="btn btn-outline-success" style="width: 140px;" type="submit">Search Medium</button>
      </form>
    
    <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Write</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="halaman.php?page=notifications" ><img src="Logo/notifikasi.webp" style="width:20px; height:20px;"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            User
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Library</a></li>
            <li><a class="dropdown-item" href="#">Stories</a></li>
            <li><a class="dropdown-item" href="#">Stats</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Refine recommendations</a></li>
            <li><a class="dropdown-item" href="#">Manage publications</a></li>
            <li><a class="dropdown-item" href="#">Help</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Apply for author verification</a></li>
            <li><a class="dropdown-item" href="#">Apply to the Partner Program</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  
  </div>
</nav>