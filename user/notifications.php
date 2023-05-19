<?php
include 'tata_letak/navbar_login.php';
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
        <div class="col-3 mt-5 pt-5">

            <!-- kolom 2-->
            <div class="col-6 col-md-4" style="font size:150px;">
                <div class="card" style="width: 30rem;">
                    <div class="card-header" style="font-weight: bolder; font-size: 24px;">
                        Staff Picks
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Notifikasi</li>
                        <li class="list-group-item">Notifikasi</li>
                        <li class="list-group-item">Notifikasi</li>
                    </ul>
                    <a href="#" class="text-success mt-3 ms-3 mb-3">See the full list</a>
                </div>
                <aside class="d-none d-sm-block mt-5">
                    <div class="row">
                        <div class="mb-3"><small><strong>Recommended topics</strong></small></div>
                    </div>
                    <div class="row" style="width:500px;">
                        <div class="col">
                            <ul class="list-inline">
                                <li class="list-inline-item btn btn-outline-secondary mb-3"> <small>Writing</small></li>
                                <li class="list-inline-item btn btn-outline-secondary mb-3">
                                    <small>Relationships</small>
                                </li>
                                <li class="list-inline-item btn btn-outline-secondary mb-3"> <small>Marchine
                                        Learning</small></li>
                                <li class="list-inline-item btn btn-outline-secondary mb-3"> <small>Productivity</small>
                                </li>
                                <li class="list-inline-item btn btn-outline-secondary mb-3"> <small>Politics</small>
                                </li>
                                <li class="list-inline-item btn btn-outline-secondary mb-3">
                                    <small>Cryptocurrency</small>
                                </li>
                                <li class="list-inline-item btn btn-outline-secondary mb-3"> <small>Psychology</small>
                                </li>
                            </ul>
                            <a href="#" class="text-success">See More Topics</a>
                            <hr>
                        </div>
                    </div>
                </aside>

                <!-- Article sidebar -->
                <div class="mb-3"><small><strong>Recently Saved</strong></small></div>
                <div class="row mb-2" style="width:500px;">
                    <div class="col-12 col-sm-8">
                        <div class="col-12">
                            <small>
                                <img class="rounded-circle" src="https://picsum.photos/id/104/25/25" alt="">
                                Manpreet Singh
                                <span class="text-muted">in</span>
                                Programming
                            </small> <br>
                            <h5 class="font-weight-bold my-2">
                                These are the programming languages Google uses
                            </h5>
                            <ul class="list-inline text-muted">
                                <li class="list-inline-item"> <small>May 16</small></li>
                                <li class="list-inline-item"> <small>.</small></li>
                                <li class="list-inline-item"> <small>4 min read</small></li>
                                <li class="list-inline-item small"> <small><i class="fas fa-star"></i></small></li>
                                <li class="list-inline-item float-right"><a href="#" class="text-dark"><i
                                            class="far fa-bookmark"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4">
                        <img class="w-100  d-none d-sm-block" src="https://picsum.photos/id/737/200/150" alt="">
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