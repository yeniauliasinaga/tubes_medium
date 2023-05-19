<?php 
include '../koneksi.php';
include '../tata_letak/navbar_login.php';
?>

<div class="container text-start">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">

        <div class="col m-5 p-3">
            <div class="row">
                <div class="col-7">
                    <h1 class="text-start">Your Stories</h1>
                </div>
                <div class="col">
                    <a type="button" href="create_story.php" class="btn btn-success btn-rounded">Write a
                        story</a>
                </div>

                <div class="text-center mt-5">
                    <div class="row row-cols-auto">
                        <h5 class="col-sm-6" style="text-decoration: none; color: black;">Published</h5>
                    </div>
                </div>
            </div>
            <!--draft yang disimpan-->
            <div class="container text-start">
                <div class="card w-75 mt-5">
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <h5 class="card-title">Syntax php judul stories</h5>
                                <p class="card-text">Isi dari stories</p>
                            </div>
                            <div class="col-2">
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        More
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edit story</a></li>
                                        <li><a class="dropdown-item" href="#">Delete story</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
</body>

</html>