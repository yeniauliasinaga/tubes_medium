<?php include 'navbar.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-dark mx-auto my-4">Daftar Komentar</h2>
                    <hr style="border-top: 1px solid grey;">
                        <p class="ml-2">
                            <a href="admin.php">Home</a> / <a href="komentar.php">Moderasi Komentar</a>
                        </p>
                    <hr style="border-top: 1px solid grey;">
                </div>
            </div>
            <div class="card mx-3 my-3" style="width: 65rem;">
                <div class="card-header">
                    Daftar Komentar
                </div>

                <ul class="list-group list-group-flush">
                <div class=" mx-3 my-3">

                    <table class="table table-bordered">
                        <thead>
                          <tr style="background-color: white;">
                            <th style="width: 2%;" scope="col">No</th>
                            <th style="width: 15%;" scope="col">Nama</th>
                            <th style="width: 15%;" scope="col">Email</th>
                            <th style="width: 15%;" scope="col">Judul Berita</th>
                            <th style="width: 15%;" scope="col">Isi Komentar</th>
                            <th style="width: 8%;" scope="col">Status</th>
                            <th style="width: 30%;" scope="col">Tindakan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope=".."></th>
                            <td>nama</td>
                            <td>email</td>
                            <td>judul</td>
                            <td>isi_komentar</td>
                            <td>status_komentar"<span class='text-success'>Publish</span>" : "<span class='text-danger'>Tidak Dipublish</span></td>
                            <td>
                                <a type="button" class="btn btn-dark"  name="sembunyi" href="...">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                                        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
                                    </svg>
                                </a>
                                <a type="button" class="btn btn-primary" name="muncul" href="...">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </a>
                                <a type="button" class="btn btn-danger alert_notif" name="hapus" href="...">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
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
                            <a class="page-link">Previous</a>
                        </li>
                            <li class="page-item"><a class="page-link" href="..."></a></li>			
                        <li class="page-item">
                            <a  class="page-link">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.2.1/sweetalert2.min.js"></script>
    </body>
</html>