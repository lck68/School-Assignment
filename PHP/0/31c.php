<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>主页</title>
</head>
<body>
<?php
    if(isset($_COOKIE['username'])){
        echo $_COOKIE['username'].",你好，欢迎访问本网站！<br/>";
        echo '<a href="31d.php">注销</a>';
    }else{
        header("location:31a.html");
    }
?>
</body>
</html>