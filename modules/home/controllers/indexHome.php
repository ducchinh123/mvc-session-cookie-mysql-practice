<?php

require_once './modules/home/models/homeModel.php';
function index_home() {
    $list_users = get_list_user();
    $data['users'] = $list_users;
    return view('\home\indexHome', $data);
}