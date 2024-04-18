<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'php_practice_1';

$connect = new mysqli($servername, $username, $password, $dbname);

if($connect->connect_error) {
    die('Lỗi kết nối: '.$connect->connect_error);
}
// echo "Kết nối thành công đến cơ sở dữ liệu ".$dbname;