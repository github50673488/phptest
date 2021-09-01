<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 获取表单提交的用户名和密码
    echo '用户名：' . $_REQUEST['username'];
    echo '密码：' . $_REQUEST['password'];

    echo 'gender：' . $_REQUEST['gender'];
    echo 'agree：' . $_REQUEST['agree'];
    echo 'agree1' . $_REQUEST['agree1'];

    var_dump($_REQUEST['funs']);
    var_dump($_REQUEST['subject']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
        <label for="username">用户名</label>
<!--        表单元素中的文本框文本域一类的元素，都是直接将元素的 name 属性值作为键，用户填写的信息作为值-->
        <input type="text" id="username" name="username">
    </div>
    <div>
        <label for="password">密码</label>
        <input type="password" id="password" name="password">
    </div>

    <div>
        gender
        <!-- 最终只会提交选中的那一项的 value -->
        <input type="radio" name="gender" value="male" checked>
        <input type="radio" name="gender" value="female">
    </div>


    <!-- 没有设置 value 的 checkbox 选中提交的 value 是 on -->
    <div>agree <input type="checkbox" name="agree" checked></div>
<div>
    <!-- 设置了 value 的 checkbox 选中提交的是 value 值 -->
    agree1<input type="checkbox" name="agree1" value="true" checked>
</div>

<div>
    funs
    <input type="checkbox" name="funs[]" value="football" checked>
    <input type="checkbox" name="funs[]" value="basketball">
    <input type="checkbox" name="funs[]" value="world peace">
</div>

    <select name="subject">
        <!-- 设置 value 提交 value -->
        <option value="1">语文</option>
        <!-- 没有设置 value 提交 innerText -->
        <option>数学</option>
    </select>
<div>
    <button type="submit">登录</button>
</div>

</form>
</body>
</html>