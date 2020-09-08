<?php

    function createKomentar($data){
        $userId = escape($data['user_id']);
        $artikelId = escape($data['artikel_id']);
        $keterangan = escape($data['keterangan']);

        $query = "INSERT INTO komentar (user_id, artikel_id, keterangan) VALUES ('$userId', '$artikelId', '$keterangan')";
        return run($query);
    }

    function getKomentar($id){
        $query  = "SELECT komentar.keterangan, komentar.created_at, users.name FROM komentar INNER JOIN users ON komentar.user_id = users.id WHERE komentar.artikel_id=$id ORDER BY komentar.id DESC";
        return result($query);
    }