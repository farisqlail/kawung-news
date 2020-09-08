<?php

    function getKategori(){
        $query  = "SELECT kategori.id, kategori.keterangan, kategori.created_at, COUNT(artikel.id) AS jumlah FROM kategori LEFT JOIN artikel ON artikel.kategori_id = kategori.id GROUP BY kategori.id";
        return result($query);
    }

    function createKategori($data){
        $keterangan = escape($data['keterangan']);

        $query = "INSERT INTO kategori (keterangan) VALUES ('$keterangan')";
        return run($query);
    }

    function updateKategori($data, $id){
        $keterangan = escape($data['keterangan']);

        $query = "UPDATE kategori SET keterangan='$keterangan' WHERE id=$id";
        return run($query);
    }

    function findKategori($id){
        $query  = "SELECT keterangan FROM kategori WHERE id=$id";
        return result($query);
    }

    function deleteKategori($id){
        $query = "DELETE FROM kategori WHERE id=$id";
        return run($query);
    }