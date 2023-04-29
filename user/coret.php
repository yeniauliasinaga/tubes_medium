
<div class="container text-start">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">

        <div class="col m-5 p-3">
            <div class="row">
                <div class="col-7">
                    <h1 class="text-start">Your Stories</h1>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-success btn-rounded me-3">Write a story</button>
                    <button type="button" class="btn btn-outline-secondary circle">Import a story</button>
                </div>

                <div class="text-center mt-5">
                    <div class="row row-cols-auto">
                        <a class="col" style="text-decoration: none; color: black;"
                            href="halaman.php?page=library">Your lists</a>
                        <a class="col" style="text-decoration: none; color: black;"
                            href="halaman.php?page=saved">Saved lists</a>
                        <a class="col" style="text-decoration: none; color: black;"
                            href="halaman.php?page=highlights">Highlights</a>
                        <a class="col" style="text-decoration: none; color: black;"
                            href="halaman.php?page=readinghistory">Reading history</a>
                    </div>
                    <div class="border-bottom mt-4"></div>

                    <div class="card mt-5" style="background-color: green; height: 9rem;">
                        <h4 class="text-white mt-4">Create a list to easily organize and share stories</h4>
                        <button type="button" class="btn btn-dark mt-2" style="width: 6rem; margin-left: 7rem;">Start a
                            list</button>
                    </div>

                    <div class="card mt-3 text-start ps-5" style="background-color: #F4F4F4; height: 9rem;">
                        <p class="mt-3">Yeniauliasinaga</p>
                        <h5><b>Reading list</b></h5>

                        <div class="dropdown text-end me-5 pe-5">
                    <button class="btn btn-secondary dropdown-toggle text-black" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding: 0; border: none; background: none;">
                        More
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Edit list info</a></li>
                        <li><a class="dropdown-item" href="#">Make list public</a></li>
                        <li><a class="dropdown-item" href="#">Hide responses</a></li>
                    </ul>
                    </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- kolom 2-->
        <div class="col-6 col-md-4 mt-5 pt-5" style="font size:150px;">
            <div class="card" style="width: 30rem;">
                <div class="card-header" style="font-weight: bolder; font-size: 24px;">
                    Staff Picks
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Dihubungkan dengan php ke title dan penulis</li>
                    <li class="list-group-item">Dihubungkan dengan php ke title dan penulis</li>
                    <li class="list-group-item">Dihubungkan dengan php ke title dan penulis</li>
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
                            <li class="list-inline-item btn btn-outline-secondary mb-3"> <small>Relationships</small>
                            </li>
                            <li class="list-inline-item btn btn-outline-secondary mb-3"> <small>Marchine
                                    Learning</small></li>
                            <li class="list-inline-item btn btn-outline-secondary mb-3"> <small>Productivity</small>
                            </li>
                            <li class="list-inline-item btn btn-outline-secondary mb-3"> <small>Politics</small> </li>
                            <li class="list-inline-item btn btn-outline-secondary mb-3"> <small>Cryptocurrency</small>
                            </li>
                            <li class="list-inline-item btn btn-outline-secondary mb-3"> <small>Psychology</small> </li>
                        </ul>
                        <a href="#" class="text-success">See More Topics</a>
                        <hr>
                    </div>
                </div>
            </aside>

            <!-- Article sidebar -->
            <div class="mb-3"><small><strong>Recently Saved</strong></small></div>
            <div class="row mb-2">
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

<?php
include '../tata_letak/footer.php';
?>