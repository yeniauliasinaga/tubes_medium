<?php include 'navbar.php';?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-dark mx-auto my-4">Edit Berita</h2>
                    <hr style="border-top: 1px solid grey;">
                        <p class="ml-2">
                            <a href="">Home</a> / <a href="Pengelola_berita.php">Pengelola Berita</a> / <a href="edit_berita.php">Edit Berita</a>
                        </p>
                    <hr style="border-top: 1px solid grey;">
                </div>
            </div>

            <div class="row">
                <div class="card mx-3 my-3" style="width: 65rem;">
                    <div class="card-header">
                        Edit Berita
                    </div>
                    <div class=" mx-2 my-2 row">
                        <form action="" method="POST" style="width: 97%;" class="my-login-validation mt-3 ml-3" novalidate="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input id="judul" type="text" class="form-control" name="judul" value="..." required autofocus>
                                <div class="invalid-feedback">
                                    Silahkan isi username anda
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_berita">Tanggal Berita</label>
                                <input id="tanggal_berita" type="date" class="form-control" name="tanggal_berita" id="tanggal" value="..." required readonly >
                            </div>

                            <div class="form-group ml-3 mx-3">
                                <label for="file" class="row">Gambar</label>
                                <input class="row" type="file" name="file">
                                <input class="row" type="hidden" name="file_lama" value="...">
                            </div>

                            <img src="" width="150px;">

                            <div class="form-group">
                                <label for="name">Konten</label>
                                <textarea class="ckeditor" id="isi_berita" name="isi_berita"></textarea>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <br>
                                    <select class="form-control" name="kategori">
                                        <option>Pilih Kategori</option> 
                                    </select>
                                 </div>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary btn-block" name="updsub">
                                    Ubah Data
                                </button>
                            </div>
                        </form>
                </div>			
            </div>
        </div>
<script src="../js/jquery-3.6.0.min.js"></script>
<script src="../js/bootstrap.js"></script>
    </body>
</html>
