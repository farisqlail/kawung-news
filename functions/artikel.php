<?php

    function get($start, $perPage){
        $query  = "SELECT artikel.id, artikel.judul, artikel.konten, artikel.image, artikel.created_at, users.name, kategori.keterangan AS kategori FROM artikel INNER JOIN users ON artikel.user_id = users.id LEFT JOIN kategori ON artikel.kategori_id = kategori.id LIMIT $start, $perPage";
        return result($query);
    }

    function byKategori($params){
        $query  = "SELECT artikel.id, artikel.judul, artikel.konten, artikel.image, artikel.created_at, users.name, kategori.keterangan AS kategori FROM artikel INNER JOIN users ON artikel.user_id = users.id LEFT JOIN kategori ON artikel.kategori_id = kategori.id WHERE artikel.kategori_id=$params";
        return result($query);
    }

    function new_article($limit){
        $query  = "SELECT artikel.id, artikel.judul, artikel.konten, artikel.image, artikel.created_at, users.name, kategori.keterangan AS kategori FROM artikel INNER JOIN users ON artikel.user_id = users.id LEFT JOIN kategori ON artikel.kategori_id = kategori.id ORDER BY artikel.created_at DESC LIMIT $limit";
        return result($query);
    }

    function favorite($limit){
        $query  = "SELECT artikel.id, artikel.judul, artikel.konten, artikel.image, artikel.created_at, users.name, kategori.keterangan AS kategori FROM artikel INNER JOIN users ON artikel.user_id = users.id LEFT JOIN kategori ON artikel.kategori_id = kategori.id ORDER BY artikel.reader DESC LIMIT $limit";
        return result($query);
    }

    function all(){
        $query = "SELECT * FROM artikel";
        return result($query);
    }

    function find($id){
        $query  = "SELECT artikel.id, artikel.user_id, artikel.kategori_id, artikel.judul, artikel.konten, artikel.image, artikel.created_at, users.name, kategori.keterangan AS kategori FROM artikel INNER JOIN users ON artikel.user_id = users.id LEFT JOIN kategori ON artikel.kategori_id = kategori.id WHERE artikel.id=$id";
        return result($query);
    }

    function search($params){
        $query = "SELECT artikel.id, artikel.judul, artikel.konten, artikel.image, artikel.created_at, users.name, kategori.keterangan AS kategori FROM artikel INNER JOIN users ON artikel.user_id = users.id LEFT JOIN kategori ON artikel.kategori_id = kategori.id WHERE judul LIKE '%$params%' OR konten LIKE '%$params%'";
        return result($query);
    }

    function create($data){
        $userId = escape($data['user_id']);
        $kategori = escape($data['kategori']);
        $judul = escape($data['judul']);
        $konten = escape($data['konten']);
        $images = escape($data['nama_file']);

        $query = "INSERT INTO artikel (user_id, kategori_id, judul, konten, image) VALUES ('$userId', '$kategori', '$judul', '$konten', '$images')";
        return run($query);
    }

    function update($data, $id){
        $kategori = escape($data['kategori']);
        $judul = escape($data['judul']);
        $konten = escape($data['konten']);
        $images = escape($data['nama_file']);

        $query = "UPDATE artikel SET kategori_id='$kategori', image='$images', judul='$judul', konten='$konten' WHERE id=$id";
        return run($query);
    }

    function reading($id){
        $query = "UPDATE artikel SET reader=(reader + 1) WHERE id=$id";
        return run($query);
    }

    function delete($id){
        $query = "DELETE FROM artikel WHERE id=$id";
        return run($query);
    }