<?php

require_once './config/db.php';

function get_list_user()
{
    global $connect;
    $sql = "SELECT * FROM `users`";
    $result = $connect->query($sql);

    $i = 0;
    if ($result->num_rows > 0) {
        $list_users = [];
        while ($row = $result->fetch_assoc()) {
            $list_users[$i] = $row;
            $i++;
        }
        return $list_users;
    }
    return [];
}