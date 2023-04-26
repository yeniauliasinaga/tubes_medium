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
    <?php include '../tata_letak/navbar_create.php';?>
    <div class="container">
        <div class="row">
            <div class="col-md-25">
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
                                                <input type="text" class="form-control" name="judul" placeholder="Title"
                                                    value="">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control input-sm" name="teks_berita" id="editor"
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
                                        <input type="date" class="form-control input-sm" name="tgl_posting" value=""
                                            disabled>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label>Topic</label>
                                        <select class="form-control input-sm mt-3" name="kategori">
                                            <option value="">Choose the topic</option>
                                            <option value="Isi dengan php"></option>
                                        </select>
                                    </div>
                                    <button class="btn btn-sm btn-primary mt-3" type="submit" name="btn_publish">
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>