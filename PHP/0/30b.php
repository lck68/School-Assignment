<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<?php
    session_start();
    if(isset($_POST['btn'])){
        $username=trim($_POST['username']);
        $pwd=trim($_POST['pwd']);
        if(($username=='')||($pwd=='')){
            header('refresh:3;url=30a.html');
            exit("该用户名和密码不能为空，3秒后跳转到登陆界面。");
        }else if(($username!='dl')||($pwd!='123456')){
            header('refresh:3;url=30a.html');
            exit("用户名或密码错误，3秒后跳转到登陆界面。");
        }else if(($username=='dl')||($pwd=='123456')){
            $_SESSION['username']=$username;
            header("location:30c.php");
        }
    }
?>
</body>
</html>