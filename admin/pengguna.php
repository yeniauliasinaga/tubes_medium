<?php include 'navbar.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-dark mx-auto my-4">Daftar Pengguna</h2>
                    <hr style="border-top: 1px solid grey;">
                        <p class="ml-2">
                            <a href="admin.php">Home</a> / <a href="pengguna.php">Pengguna</a>
                        </p>
                    <hr style="border-top: 1px solid grey;">
                </div>
            </div>
            <div class="card  my-3" style="width: 65rem;">
                <div class="card-header">
                    Tabel Daftar Pengguna
                </div>
                <div class= "mx-2 my-2">
                <div class="row">
                    <div class="col my-2 ml-4">
                        <a href="tambah_pengguna.php" type="button" class="btn btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-person-plus-fill mb-1" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                            Tambah Pengguna
                        </a>
                    </div>
                    <div class="col">
                        <form action="pengguna.php" method="get" class="form-inline my-2">
                            <input class="form-control ml-auto mr-2" type="text" placeholder="Cari Nama" name="cari" aria-label="Search">
                            <input class="btn btn-outline-secondary" type="submit" value="Cari">
                        </form>			
                    </div>		
				</div>

                <ul class="list-group list-group-flush">
                <div class=" mx-3 my-3">

                    <table class="table table-bordered">
                        <thead>
                          <tr style="background-color: white;">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Level</th>
                            <th scope="col">Tindakan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"></th>
                            <td>nama</td>
                            <td>username</td>
                            <td>email</td>
                            <td>level</td>
                            <td>
                                <a type="button" class="btn btn-primary" href="edit_pengguna">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>
                                <a type="button" class="btn btn-danger alert_notif" href="hapus">
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
            </div>


        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.2.1/sweetalert2.min.js"></script>
    </body>
</html>