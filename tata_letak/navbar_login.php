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
                style="width:800px;">
            <button class="btn btn-outline-success" style="width: 80px;" type="submit">Search Medium</button>
        </form>

        <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="create_story.php">Write</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="halaman.php?page=notifications"><img src="../Logo/notifikasi.webp"
                            style="width:20px; height:20px;"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        User
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