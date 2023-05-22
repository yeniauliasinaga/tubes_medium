<?php

include '../koneksi.php';

function registrasi($pengguna){
    global $koneksi;
    $nama=stripslashes(htmlspecialchars($pengguna["nama"]));
    $email=htmlspecialchars($pengguna["email"]);
    $password=htmlspecialchars($pengguna["password"]);
    $password2=htmlspecialchars($pengguna["password2"]);

    //upload gambar dimasukkan ke function upload
    $gambar = upload();
    
    if(!$gambar)
    {
        return false;
    }


    // cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT nama FROM tb_pengguna WHERE nama='$nama'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('nama tersebut sudah ada! Silahkan pilih nama lain');
        document.location.href='register.php';
        </script>"; 

    }

    //cek konfirmasi password
    if ($password!==$password2) {
        echo "<script>
        alert('Konfirmasi password Anda tidak sama!');
        document.location.href='register.php';
        </script>";  

        return false;
    }

    //enkripsi password

    $password = password_hash($password, PASSWORD_DEFAULT);

    //TAMBAHKAN USER BARU KE DATABASE
    mysqli_query($koneksi,"INSERT INTO tb_pengguna VALUES('','$nama','$email','$password','$gambar','user')");

    return mysqli_affected_rows($koneksi);
   
}

//fungsi upload gambar

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang di upload
    if ($error===4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        document.location.href='register.php';
        </script>"; 

        return false;
    }


    //cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg','jpeg','png'];

    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if ( !in_array($ekstensiGambar,$ekstensiGambarValid)) {
        
        echo "<script>
        alert('yang Anda upload bukan gambar!');
        document.location.href='register.php';
        </script>"; 

        return false;
    }

    if ($ukuranFile > 2000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar !!');
        document.location.href='register.php';
        </script>"; 

        return false;
    }

    //lolos pengecekan , gambar siap di upload

    // generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName,'../user/img/'.$namaFileBaru);

    return $namaFileBaru;

}



function create_article($artikel)
{
    global $koneksi;
    $id_pengguna = $_SESSION['id_pengguna'];
    $kategori = $_POST['id_tag'];
    $judul_artikel = htmlspecialchars($artikel["judul_artikel"]);
    $isi_artikel = htmlspecialchars($artikel["isi_artikel"]);
    $tanggal = $_POST['tgl_artikel'];
    $gambar = upload();
    
    if(!$gambar)
    {
        return false;
    }

// // ambil data file
// $namaFile = $_FILES['gambar']['name'];
// $namaSementara = $_FILES['gambar']['tmp_name'];

// // tentukan lokasi file akan dipindahkan
// $dirUpload = "../assets/berita/";

// // pindahkan file
// $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

$insert = "INSERT INTO tb_artikel (id_artikel, id_pengguna, id_tag, judul_artikel, isi_artikel, gambar, tgl_artikel)
VALUES ('','$id_pengguna', '$kategori', '$judul_artikel', '$isi_artikel', '$gambar', '$tanggal')";

mysqli_query($koneksi, $insert);

return mysqli_affected_rows($koneksi);
}


// fungsi untuk menampilkan dan disimpan dalam sebuah array
function query($data){
    
    global $koneksi ;
    
    $query = mysqli_query($koneksi,$data);
    
    $lingkup = [];
    while($ambil= mysqli_fetch_assoc($query))
    {
        $lingkup[] = $ambil;
    
    }
    return $lingkup;
    
    }



//tambah pengguna
//
function tambah_pengguna($pengguna){
    global $koneksi;
    $nama=stripslashes(htmlspecialchars($pengguna["nama"]));
    $email=htmlspecialchars($pengguna["email"]);
    $password=htmlspecialchars($pengguna["password"]);
    $password2=htmlspecialchars($pengguna["password2"]);
    $role=$pengguna["role"];

    //upload gambar dimasukkan ke function upload
    $gambar = upload();
    
    if(!$gambar)
    {
        return false;
    }


    // cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT nama FROM tb_pengguna WHERE nama='$nama'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('nama tersebut sudah ada! Silahkan pilih nama lain');
        document.location.href='tambah_pengguna.php';
        </script>"; 

    }

    //cek konfirmasi password
    if ($password!==$password2) {
        echo "<script>
        alert('Konfirmasi password Anda tidak sama!');
        document.location.href='tambah_pengguna';
        </script>";  

        return false;
    }

    //enkripsi password

    $password = password_hash($password, PASSWORD_DEFAULT);

    //TAMBAHKAN USER BARU KE DATABASE
    mysqli_query($koneksi,"INSERT INTO tb_pengguna VALUES('','$nama','$email','$password','$gambar','$role')");

    return mysqli_affected_rows($koneksi);
   
}


function ubah($data)
{
    global $koneksi;


    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $role = htmlspecialchars($data["role"]);
    $gambarLama = htmlspecialchars($data["gambarlama"]);

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error']==4) {
       $gambar = $gambarLama;
    }else{
        $gambar = upload_edit();
    }
   
    
    $query = "UPDATE tb_pengguna SET
                nama = '$nama',
                email = '$email',
                role = '$role',
                foto_profil = '$gambar'
            WHERE id_pengguna = $id;
    ";

    mysqli_query($koneksi,$query);

    return mysqli_affected_rows($koneksi);
}

function upload_edit()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang di upload
    if ($error===4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu!');
        document.location.href='penguna.php';
        </script>"; 

        return false;
    }


    //cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg','jpeg','png'];

    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if ( !in_array($ekstensiGambar,$ekstensiGambarValid)) {
        
        echo "<script>
        alert('yang Anda upload bukan gambar!');
        document.location.href='pengguna.php';
        </script>"; 

        return false;
    }

    if ($ukuranFile > 2000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar !!');
        document.location.href='pengguna.php';
        </script>"; 

        return false;
    }

    //lolos pengecekan , gambar siap di upload

    // generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName,'../user/img/'.$namaFileBaru);

    return $namaFileBaru;

}


/* fungsi untuk tambah story */
function create_story($story)
{
    global $koneksi;
    $judul = htmlspecialchars($story["judul_story"]);
    $isi = htmlspecialchars($story["isi_story"]);
    $kategori = $_POST['id_tag'];
    $tgl_story = $_POST['tgl_story'];
    $id_pengguna = $_SESSION['id_pengguna'];
    
    // ambil data file
    $namaFile = $_FILES['gambar']['name'];
    $namaSementara = $_FILES['gambar']['tmp_name'];
    
    // tentukan lokasi file akan dipindahkan
    $dirUpload = "../assets/story/";
    
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
    
    $tambah = "INSERT INTO tb_story (id_pengguna, id_tag, judul_story, isi_story, gambar, tgl_story)
               VALUES ('$id_pengguna', '$kategori', '$judul', '$isi', '$namaFile', '$tgl_story')";
    
    mysqli_query($koneksi, $tambah);
    
    return mysqli_affected_rows($koneksi);
}

if (isset($_POST["btn_tambah"])) {
    $create_story = create_story($_POST);
    if ($create_story > 0) {
        echo "<script>
        alert('Story berhasil ditambahkan!');
        document.location.href='stories.php';
        </script>";
    } else {
        echo "<script>
        alert('Story gagal ditambahkan');
        document.location.href='create_story.php';
        </script>";
    }
}

function create_article($artikel)
{
    global $koneksi;
    $id_pengguna = $_SESSION['id_pengguna'];
    $kategori = $_POST['id_tag'];
    $judul_artikel = htmlspecialchars($artikel["judul_artikel"]);
    $isi_artikel = htmlspecialchars($artikel["isi_artikel"]);
    $tanggal = $_POST['tgl_artikel'];

// ambil data file
$namaFile = $_FILES['gambar']['name'];
$namaSementara = $_FILES['gambar']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../assets/berita/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

$insert = "INSERT INTO tb_artikel (id_artikel, id_pengguna, id_tag, judul_artikel, isi_artikel, gambar, tgl_artikel)
VALUES ('','$id_pengguna', '$kategori', '$judul_artikel', '$isi_artikel', '$namaFile', '$tanggal')";

mysqli_query($koneksi, $insert);

return mysqli_affected_rows($koneksi);
}if (isset($_POST["btn_tambah_artikel"])) {
    $create_article = create_article($_POST);
    if ($create_article > 0) {
        echo "<script>
        alert('Artikel berhasil ditambahkan!');
        document.location.href='index.php';
        </script>";
    } else {
        echo "<script>
        alert('Artikel gagal ditambahkan');
        document.location.href='create_article.php';
        </script>";
    }
}



