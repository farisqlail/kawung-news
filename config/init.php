<?php

    session_start();
    $base_url = 'http://localhost/kawung-news/';

    require_once '../functions/connection.php';
    require_once '../functions/control.php';
    require_once '../functions/artikel.php';
    require_once '../functions/kategori.php';
    require_once '../functions/komentar.php';
    require_once '../functions/auth.php';

    if(isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        $user = mysqli_fetch_object(get_user($email));
    }