<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'halarticle':
            include 'konten.php';
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
        case 'following':
            include 'user/following.php';
            break;
        case 'readinghistory':
            include 'user/reading_history.php';
            break;
        case 'muted':
            include 'user/muted.php';
            break;
        case 'suggestion':
            include 'user/refine_recommended.php';
            include 'user/suggestion.php';
            break;
        case 'notifications':
            include 'user/notifications.php';
            break; 
        case 'home':
            include 'tata_letak/navbar_login.php';
            include 'user/home.php';
            break;
        case 'lists':
            include 'tata_letak/navbar_login.php';
            include 'user/lists.php';
            break;
        case 'about':
            include 'tata_letak/navbar_login.php';
            include 'user/about.php';
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