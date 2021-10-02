<?php
// http://localhost/phptest/20210929/01-cookie.php
//setcookie('name', '学院君');
//$expires = time() + 3600;
//setcookie('website', 'https://xueyuanjun.com', $expires); // 1 小时后过期
//
//echo '设置 Cookie 成功';

if (isset($_GET['action']) && $_GET['action'] == 'get_cookies') {
    $name = $_COOKIE['name'];
    $website = $_COOKIE['website'];
    printf('从用户请求中读取的 Cookie 数据：{name: %s, website: %s}', $name, $website);
    exit();
}
setcookie('name', '学院君');
$expires = time() + 3600;
setcookie('website', 'https://xueyuanjun.com', $expires); // 1 小时后过期

// header('Location: 01-cookie.php?action=get_cookies');
header("Location: ".$_SERVER['PHP_SELF']."?action=get_cookies");
