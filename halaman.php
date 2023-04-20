<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'halarticle':
            include 'hal_article.php';
            break;
        case 'ourstory':
            include 'ourstory.php';
            break;
        case 'write':
            include 'write.php';
            break;
        case 'signin':
            include 'login.php';
            break;
        default:
            include 'tata_letak/navbaratas.php';
            include 'index.php';
            break;
    }
} else {
    include 'tata_letak/navbaratas.php';
    include 'index.php';
}