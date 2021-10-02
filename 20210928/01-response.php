<?php
//http://localhost/phptest/20210928/01-response.php
//http://localhost:63342/phptest/20210928/01-response.php?_ijt=8l689d98gs3ds407bebg13t6ne&_ij_reload=RELOAD_ON_SAVE


//header('HTTP/1.1 200 OK');
//echo 'liu';

//header('HTTP/1.1 404 Not Found');
//echo 'liu Not Found';


// header('HTTP/1.1 302 Not Found');
// header('location: https://xueyuanjun.com');


// header('HTTP/1.1 301 Move Permanently');
//header('location: https://xueyuanjun.com');


// HTTP Basic 认证简单实现
//if (empty($_SERVER['PHP_AUTH_USER'])) {
//    header('WWW-Authenticate: Basic');
//} else {
//    $name = $_SERVER['PHP_AUTH_USER'];
//    $pass = $_SERVER['PHP_AUTH_PW'];
//    if ($name == '学院君' && $pass == '123456') {
//        echo '用户认证成功，可以访问该页面';
//    } else {
//        header('HTTP/1.1 401 Unauthorized');
//        echo '用户认证失败，请刷新页面重试';
//    }
//}

// JSON 响应
//$album = new stdClass();
//$album->title = 'PHP 全栈工程师指南';
//$album->summary = '基于 Laravel + Vue.js 框架的学习和实战，快速成为合格的 PHP 全栈开发工程师';
//$album->author = '学院君';
//$album->posts = [
//    [
//        'id' => 1,
//        'title' => 'PHP 入门指南'
//    ],
//    [
//        'id' => 2,
//        'title' => 'Laravel 入门指南'
//    ]
//];
//echo json_encode($album);


// 文件下载
// 设置下载文件内容格式
header('Content-type: application/octet-stream');
// 设置下载文件名
header('Content-Disposition: attachment; filename="laravel.zip"');
// 读取二进制文件流返回给客户端浏览器
$filepath = __DIR__ . '/files/aaa.zip';
readfile($filepath);