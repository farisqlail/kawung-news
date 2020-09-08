<?php

    require_once '../config/init.php';

    if(!isset($_SESSION['email'])) {
        header('Location: ../artikel/index.php');
    }

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $article = find($id);

        $item = mysqli_fetch_object($article);

        if ($user->role == 1 || $item->user_id == $user->id) {
            if(!empty($item->image)) {
                unlink('../assets/images/'.$item->image);
            }

            if(delete($id)) {
                header('Location: index.php');
            } else { 
                echo 'Gagal menghapus artikel!';
            }
        } else {
            header('Location: ../artikel/index.php');
        }
        
    } else {
        header('Location: index.php'); 
    }