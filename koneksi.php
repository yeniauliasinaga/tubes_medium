<?php
    if(!isset($_SESSION)){
        session_start();
    }

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'tubes_sbd';

    $koneksi = mysqli_connect($host, $user, $pass, $database);

    if($koneksi -> connect_error){
        die("Koneksi gagal".$koneksi -> connect_error);
    }