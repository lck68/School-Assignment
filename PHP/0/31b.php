<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
<?php
    if(isset($_POST['btn'])){
        $username=trim($_POST['username']);
        $pwd=trim($_POST['pwd']);
        $savetime=trim($_POST['saveTime']);
        if(($username=='')||($pwd=='')){
            header('refresh:3;url=31a.html');
            exit("该用户名和密码不能为空，3秒后跳转到登陆界面。");
        }else if(($username!='dl')||($pwd!='123456')){
            header('refresh:3;url=31a.html');
            exit("用户名或密码错误，3秒后跳转到登陆界面。");
        }else if(($username=='dl')||($pwd=='123456')){
            switch ($savetime){
                case 0: setcookie("username",$username); break;
                case 1: setcookie("username",$username,time()+60*60*2); break;
                case 2: setcookie("username",$username,time()+60*60*24*2); break;
                case 3: setcookie("username",$username,time()+60*60*24*7*2); break;
            }
            header("location:31c.php");
        }
    }
?>
</body>
</html>