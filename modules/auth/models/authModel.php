<?php
require_once './config/db.php';
function check_account($email)
{
    global $connect;
    $sql = "SELECT * FROM users WHERE `email`='{$email}'";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
        return false;
    }
    return true;
}

function check_account_login($email, $password) {
    global $connect;
    if(!empty($email) && !empty($password)) {
        $sql = "SELECT * FROM `users` WHERE `email`='{$email}' AND `password`='{$password}'";
        $result = $connect->query($sql);
        if($result->num_rows > 0) {
            return true;
        }
        return false;
    }
    
}

function get_username($email, $password) {
    global $connect;
    if(!empty($email) && !empty($password)) {
        $sql = "SELECT `username` FROM `users` WHERE `email`='{$email}' AND `password`='{$password}'";
        $result = $connect->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                return $row['username'];
            }
        }
        return false;
    }
}

function create_account($data)
{
    global $connect;
    if (!empty($data)) {
        $sql = "INSERT INTO users (`username`, `email`, `password`, `created_at`, `updated_at`) VALUES ('{$data['username']}', '{$data['email']}', '{$data['password']}', '{$data['created_at']}', '{$data['updated_at']}')";
        $result = $connect->query($sql);
        if ($result == true) {
            return true;
        }
        return false;
    }
}