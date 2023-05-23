<?php
include '../tata_letak/navbar_login.php';
?>
<div class="container text-start">
    <div class="row">
        <div class="col">
            <h1 class="mt-5">
                <b>Notifications</b>
            </h1>
            <div class="text-center mt-5">
                <div class="row row-cols-auto">
                    <a class="col" style="text-decoration: none; color: black;"
                        href="halaman.php?page=notifications">All</a>
                    <a class="col" style="text-decoration: none; color: black;"
                        href="halaman.php?page=notifications">Responses</a>
                    <!--Semua dan respon notifikasi-->
                    <div class="card w-100 mt-5">
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <p class="text-start">You're all caught up.</p>
                                </div>
                                <div class="col-2"><a href="#" class="btn btn-outline-success mt-1">Your stats</a>
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