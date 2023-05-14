<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'halarticle':
            include 'konten.php';
            break;
        case 'signin':
            include 'login.php';
            break;
        case 'following':
            include 'user/following.php';
            break;
        case 'suggestion':
            include 'user/refine_recommended.php';
            include 'user/suggestion.php';
            break;
        case 'notifications':
            include 'user/notifications.php';
            break; 
        case 'about':
            include 'tata_letak/navbar_login.php';
            include 'user/about.php';
            break;
        case 'profile':
            include 'tata_letak/navbar_login.php';
            include 'user/profile.php';
            break;
        case 'library':
            include 'tata_letak/navbar_login.php';
            include 'user/library.php';
            break;
        case 'stories':
            include 'tata_letak/navbar_login.php';
            include 'user/stories.php';
            break;

        default:
            include 'tata_letak/navbar_login.php';
            include 'landing_page.php';
            break;
    }
} else {
    include 'tata_letak/navbar_login.php';
    include 'index.php';
}