<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC Practice</title>
    <link rel="shortcut icon" href="public/images/avatar-tts.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <base href="http://localhost/devC/Php/my-php/">
</head>

<body>
    <div class="container">
        <div id="header">
            <nav class="navbar navbar-expand-lg bg-success">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo $baseUrl; ?>">Trang chủ</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="<?php echo '?mod=products&act=index_product'; ?>">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Tài khoản
                                </a>
                                <ul class="dropdown-menu">
                                <?php
                            if (isset($_SESSION['info_user'])) {
                                ?>
                                <li><a class="dropdown-item" href="?mod=auth&act=get_logout">Đăng xuất</a></li>
                                <?php
                            }else {
                                ?>
                                <li><a class="dropdown-item" href="?mod=auth&act=get_login">Đăng nhập</a></li>
                                    <li><a class="dropdown-item" href="?mod=auth&act=get_register">Đăng ký</a></li>
                                <?php
                            }
                            ?>
                                    
                                </ul>
                            </li>


                            <?php
                            if (isset($_SESSION['info_user'])) {
                                ?>
                                <li class="nav-item dropdown" style="position: relative;">
                                    <i style="position: absolute; top: 3px; font-size: 22px;"
                                        class="bi bi-person-circle"></i>
                                    <span style="padding: 28px;"><Strong>Xin chào, </Strong> <?php echo $_SESSION['info_user']['username']; ?></span>
                                </li>
                                <?php
                            }
                            ?>

                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>