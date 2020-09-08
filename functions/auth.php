<?php
    
    function register($data){
        $nama = escape($data['nama']);
        $email = escape($data['email']);
        $password = escape($data['password']);
        $password = md5($password);

        $query = "INSERT INTO users (name, email, password, role) VALUES ('$nama', '$email', '$password', 0)";
        return run($query);
    } 

    function login($data) {
        $email = escape($data['email']);
        $password = escape($data['password']);
        $password = md5($password); 

        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        global $connection;

        if($result = mysqli_query($connection, $query)){
            if(mysqli_num_rows($result) != 0)return true;
            else return false;
        }
    }

    function get_user($email){
        $query = "SELECT * FROM users WHERE email = '$email'"; 
        return result($query);
    }