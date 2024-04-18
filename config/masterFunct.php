<?php

function view($template, $data = [])
{

    $viewPath = substr(__DIR__, 0, 31) . 'resource\views' . $template . '.php';
    if (!file_exists($viewPath)) {
        throw new Exception('Giao diện không tồn tại với: ' . $template);
    }
    extract($data);
    include $viewPath;
}
