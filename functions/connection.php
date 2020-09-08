<?php 

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'portal_berita';

    $connection = mysqli_connect($host, $user, $pass, $db) or die(mysqli_error());