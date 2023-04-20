<?php include 'link.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-dark mx-auto my-4">Tambah Kategori</h2>
                    <hr style="border-top: 1px solid grey;">
                    <p class="ml-2">
                        <a href="">Home</a> / <a href="">Kategori</a>
                    </p>
                    <hr style="border-top: 1px solid grey;">
                </div>
            </div>
            <div class="card mx-3 my-3" style="width: 65rem;">
                <div class="card-header">
                    Daftar Kategori
                </div>
                <div class="mx-2 my-2">
                    <div class="row">
                        <div class="col my-2 ml-4">
                            <a href="" type="button" class="btn btn-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-tag" viewBox="0 0 16 16">
                                    <path
                                        d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z" />
                                    <path
                                        d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z" />
                                </svg>
                                Tambah Kategori
                            </a>
                        </div>
                        <div class="col">
                            <form action="" method="get" class="form-inline my-2">
                                <input class="form-control ml-auto mr-2" type="text" placeholder="Cari Kategori"
                                    name="cari" aria-label="Search">
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
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td>
                                            <a type="button" class="btn btn-primary" href="syntax php">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </a>
                                            <a type="button" class="btn btn-danger alert_notif" href="syntax php">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
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
                <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.2.1/sweetalert2.min.js">
                </script>
                </body>

                </html>