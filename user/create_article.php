<?php
	require '../koneksi.php';
    include 'fungsi.php';

    $tag="SELECT *FROM tb_tag";
    $result = mysqli_query($koneksi, $tag);

    if (isset($_POST["btn_tambah_artikel"])) {
        $create_article = create_article($_POST);
        if ($create_article > 0) {
            echo "<script>
            alert('Artikel berhasil ditambahkan!');
            document.location.href='index.php';
            </script>";
        } else {
            echo "<script>
            alert('Artikel gagal ditambahkan');
            document.location.href='create_article.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="../Logo/simbol.png" sizes="16x16 32x32" rel="shortcut icon">
    <title>Medium</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../dist/css/admin.css">
    <script src="../assets/jquery/jquery-1.12.0.min.js"></script>
    <script async defer src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/ckeditor/ckeditor.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-25 mt-5">
                <h2 class="page-header"><i class="fa fa-newspaper-o"></i> Article</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-50 main-content">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-20">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="col-sm-15">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="judul_artikel"
                                                placeholder="Title" value="">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control input-sm" name="isi_artikel" id="editor"
                                                placeholder="Tell your story" rows="15"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 mt-3">
                                        <div class="form-group">
                                            <input type="file" name="gambar" id="gambar">
                                            <label class="text-muted">Ukuran gambar maks 2 MB</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <div class="form-group">
                                            <input type="date" class="form-control input-sm" name="tgl_artikel"
                                                value="<?php  echo date("Y-m-d"); ?>" required readonly>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Tag</label>
                                        <select class="form-control input-sm mt-3" name="id_tag">
                                            <?php while($panggil = mysqli_fetch_assoc($result)){
                                                echo" <option value=$panggil[id_tag]>$panggil[tag]</option>";
                                            }?>
                                        </select>
                                    </div>
                                    <button class="btn btn-sm btn-primary mt-3 mb-5" type="submit"
                                        name="btn_tambah_artikel">
                                        <i class="fa fa-check"></i> Publish
                                    </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
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