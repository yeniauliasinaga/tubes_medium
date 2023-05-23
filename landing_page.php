<?php 
require('koneksi.php');
include 'tata_letak/navbar_index.php'; 

$query = "SELECT *
FROM tb_artikel, tb_pengguna, tb_tag
WHERE tb_artikel.id_pengguna = tb_pengguna.id_pengguna
AND tb_artikel.id_tag = tb_tag.id_tag
ORDER BY RAND()";

$result = mysqli_query($koneksi, $query);

?>

<!-- Trending Container - Start -->
<div class="container py-5">
    <div class="row mb-2">
        <div class="col-12 mt-5">
            <h5><i class="fas fa-chart-line"></i><small class="font-weight-bold"> TRENDING ON MEDIUM</small></h5>
        </div>
    </div>

    <div class="row">
        <?php while ($artikel = mysqli_fetch_assoc($result)) { ?>
        <!-- Article -->
        <article class="col-12 col-sm-12 col-md-4">
            <div class="row">
                <div class="col-10">
                    <img class="rounded-circle img-responsive" src="user/ img/<?=$artikel['foto_profil']?>" alt=""
                        style="width: 40px; height: 40px; object-fit: cover; border-radius: 50%;">
                    <?=$artikel['nama']?>
                    <span class="text-muted">in</span>
                    <?=$artikel['tag']?>
                    <small class="font-weight-bold">
                        <a href="konten.php?id_artikel=<?=$artikel['id_artikel']?>" style="color: black">
                            <?=$artikel['judul_artikel']?>
                        </a>
                    </small><br>
                    <ul class="list-inline text-muted">
                        <li class="list-inline-item"><small><small><?=$artikel['tgl_artikel']?></small></small></li>
                    </ul>
                </div>
            </div>
        </article>
        <?php } ?>
    </div>
</div>

<?php 
include 'tata_letak/footer.php'; 
?>
