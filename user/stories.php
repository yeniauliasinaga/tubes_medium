<?php include '../tata_letak/navbar_login.php'; ?>

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
                            href="halaman.php?page=following">Drafts</a>
                        <a class="col" style="text-decoration: none; color: black;"
                            href="halaman.php?page=readinghistory">Published</a>
                        <a class="col" style="text-decoration: none; color: black;"
                            href="halaman.php?page=muted">Responses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
