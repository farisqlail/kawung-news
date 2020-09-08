<?php

    function excerpt($string){
        $string = substr($string, 0, 100);
        return $string . " ...";
    }
    
    function result($query){
        global $connection;
        if($result = mysqli_query($connection, $query) or die('gagal menampilkan data')){
            return $result;
        }
    }
     
    function run($query){
        global $connection;

        if(mysqli_query($connection, $query)) return true;
        else return false;
    } 
    
    function escape($data){
        global $connection;
        return mysqli_real_escape_string($connection, $data);
    }

    function planText($text){
        $text = strip_tags($text, '<br><p><li>');
        $text = preg_replace ('/<[^>]*>/', PHP_EOL, $text);

        return $text;
    }