<?php include 'navbar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-dark mx-auto my-4">Daftar Berita</h2>
            <hr style="border-top: 1px solid grey;">
            <p class="ml-2">
                <!--syntax php jika login-->
                <a href="...">Home</a>
                <a href="...">Pengelola Berita</a>
            </p>
            <hr style="border-top: 1px solid grey;">
        </div>
    </div>
    <div class="card mx-3 my-3" style="width: 65rem;">
        <div class="card-header">
            Daftar Berita
        </div>
        <div class="row">
            <div class="col my-2 ml-4">
                <a href="..." type="button" class="btn btn-dark mx-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-file-earmark-plus-fill mb-1" viewBox="0 0 16 16">
                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z" />
                    </svg>
                    Tambah Berita
                </a>
            </div>
        </div>

        <ul class="list-group list-group-flush">
            <div class=" mx-3 my-3">
                <table class="table table-bordered">
                    <thead>
                        <tr style="background-color: white;">
                            <th scope="col">No</th>
                            <th style="width: 200px;" scope="col">Judul</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Pembuat Berita</th>
                            <th scope="col">Tanggal Posting</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>judul</td>
                            <td><img style="width: 120px;" src="..."></td>
                            <td>kategori</td>
                            <td>penulis</td>
                            <td>tanggal_berita</td>
                            <td>
                                <a type="button" class="btn btn-primary" href="..."><!--file edit_berita-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </a>
                                <a type="button" class="btn btn-danger alert_notif"href="..."><!--file hapus_berita-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"
                                        path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </a>
                                <a type="button" class="btn btn-dark" href="..."><!-- file konten-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </ul>
        <nav>
            <ul class="pagination justify-content-center mt-3">
                <li class="page-item">
                    <a class="page-link" href="...">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="..."></a></li>
                <li class="page-item">
                    <a class="page-link" href="..." ;>Next</a>
                </li>
            </ul>
        </nav>
    </div>

    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.2.1/sweetalert2.min.js"></script>
    
</body>
</html>