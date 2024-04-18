<?php

require_once './modules/auth/models/authModel.php';
require_once './config/global.php';
function get_login()
{
    if (isset($_POST['login'])) {
        $errors = [];
        if (empty($_POST['email'])) {
            $errors['email'] = 'Vui lòng nhập địa chỉ email';
        } else {
            $email = $_POST['email'];
        }

        if (empty($_POST['password'])) {
            $errors['password'] = 'Vui lòng nhập mật khẩu';
        } else {
            $password = md5($_POST['password']);
        }

        if (empty($errors)) {
            if (check_account_login($email, $password)) {
                // // Thiết lập lưu trữ thông tin đăng nhập
                $_SESSION['info_user']['username'] = get_username($email, $password);
                $_SESSION['info_user']['email'] = $email;
                $_SESSION['info_user']['password'] = $password;
                // ghi nhớ tôi
                $data = [
                    'username' => get_username($email, $password),
                    'email' => $email,
                    'password' => $password
                ];
                global $baseUrl;
                if (!empty($_POST['remember'])) {
                    setcookie('info_user', json_encode($data), time() + (2 * 60), $baseUrl);
                }
                
                // chuyển hướng
                header('Location: ' . $baseUrl);
            }
        } else {
            return view('\auth\login', $errors);
        }
    }
    return view('\auth\login');
}

function get_register()
{

    if (isset($_POST['register'])) {
        $errors = [];

        if (empty($_POST['username'])) {
            $errors['username'] = 'Vui lòng nhập tên đăng nhập';
        } else {
            $username = $_POST['username'];
        }

        if (empty($_POST['email'])) {
            $errors['email'] = 'Vui lòng nhập địa chỉ email';
        } else {
            $email = $_POST['email'];
        }

        if (empty($_POST['password'])) {
            $errors['password'] = 'Vui lòng nhập mật khẩu';
        } else {
            $password = md5($_POST['password']);
        }

        if (empty($errors)) {

            if (check_account($email)) {
                $data = [
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];

                if (create_account($data)) {
                    header('Location: ' . '?mod=auth&act=get_login');
                }
            } else {
                echo 'Tài khoản này đã tồn tại';
            }
        } else {
            return view('\auth\register', $errors);
        }

    }
    return view('\auth\register');
}


function get_logout()
{
    global $baseUrl;
    if (isset($_SESSION['info_user'])) {
        unset($_SESSION['info_user']);
        global $baseUrl;
        setcookie("info_user", "", time()-1, $baseUrl);
        header('Location: ' . $baseUrl);
    }

}