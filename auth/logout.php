<?php

    require_once '../config/init.php';
    $error = '';

    if(isset($_SESSION['email'])) {
        header('Location: ../artikel/index.php');
    }

    unset($_SESSION['nama']);
    session_destroy();

    header('Location: login.php');